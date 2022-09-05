<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="header">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="py-4 col align-items-center">
                            <h6 class="mb-0 h2 text-white d-inline-block">Projects</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item">
                                        <Link href="/">
                                            <i class="fa fa-home"></i>
                                        </Link>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Projects
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="py-4 col align-items-end   {{ in_array($curr_url, ['projects.add','projects.all','projects.edit','projects.delete']) ? 'show' : '' }}" :class="{ 'active': route().current() == 'projects' }">
                            <Link :href="route('projects.add')" class="btn btn-primary ">Add</Link>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <template #content>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th :class="textClassHead">
                                    Project Name
                                </th>
                                <th :class="textClassHead">
                                    Agent
                                </th>
                                <th :class="textClassHead">
                                    Start Date
                                </th>
                                <th :class="iconClassHead">
                                    Due Date
                                </th>
                                <th :class="iconClassHead">
                                Actions
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="project in projects" :key="project.id" :class="rowClass"
                                >
                                <td :class="textClassBody">
                                    {{ project.project_name }}
                                </td>
                                <td :class="textClassBody">
                                    {{ project.agent }}
                                </td>
                                <td :class="textClassBody">
                                    {{ project.start_date }}
                                </td>
                                <td :class="textClassBody">
                                    {{ project.due_date }}
                                </td>
                                <td :class="textClassBody">
                                    <Link :href="route('projects.edit',project.id)" class="btn btn-success ">Edit</Link>
                                    <Link :href="route('projects.delete',project.id)" class="btn btn-warning ml-3">Delete</Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    </div>
                </div>
            </div>
        </template>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
import axios from 'axios';


export default {
    components: {
        AppLayout,
        Link,
    },
    data() {
        return {
            textClassHead: 'text-start text-uppercase',
            textClassBody: 'text-start',
            iconClassHead: 'text-center',
            iconClassBody: 'text-center',
            rowClass: 'cursor-pointer',

            search: null,
            page: 1,
            perPage: [100, 250, 500],
            pageCount: 100,
            pagination: {},
            projects: [],
            categories: [],
            project: {},
            select_category: {},
        };
    },
    beforeMount() {
        this.getprojects();
    },
    watch: {
        
    },
    methods: {
        async getprojects() {
            const tableData = (await axios.get(route('projects.all'))).data
            console.log(tableData);
            this.projects = tableData
            this.pagination = tableData.meta
        },

    },
}

</script>
