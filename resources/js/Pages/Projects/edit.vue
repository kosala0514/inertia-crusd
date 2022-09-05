<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="header">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="py-4 col align-items-center">
                            <h6 class="mb-0 h2 text-white d-inline-block">
                                Projects
                            </h6>
                            <nav
                                aria-label="breadcrumb"
                                class="d-none d-md-block"
                            >
                                <ol
                                    class="breadcrumb breadcrumb-links breadcrumb-dark"
                                >
                                    <li class="breadcrumb-item">
                                        <Link href="/">
                                            <i class="fa fa-home"></i>
                                        </Link>
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >
                                        Projects
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >
                                        Edit Project
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <template #content>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="row">
                        <form @submit.prevent="updateProject">
                            <div class="mb-3">
                                <label
                                    for="project_name"
                                    class="form-label"
                                    >Name of the Project</label
                                >
                                <input
                                        v-model="project.project_name"
                                    type="text"
                                    class="form-control"
                                    id="project_name"
                                />
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label
                                            for="agent"
                                            class="form-label"
                                            >Name of the Agent / Company</label
                                        >
                                        <input
                                        v-model="project.agent"
                                            type="text"
                                            class="form-control"
                                            id="agent"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label
                                            for="est_budget"
                                            class="form-label"
                                            >Estimate Budget</label
                                        >
                                        <input
                                        v-model="project.est_budget"
                                            type="text"
                                            class="form-control"
                                            id="est_budget"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label
                                            for="start_date"
                                            class="form-label"
                                            >Stated Date</label
                                        >
                                        <input
                                        v-model="project.start_date"
                                            type="text"
                                            class="form-control"
                                            id="start_date"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label
                                            for="due_date"
                                            class="form-label"
                                            >Due Date</label
                                        >
                                        <input
                                        v-model="project.due_date"
                                            type="text"
                                            class="form-control"
                                            id="due_date"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label
                                    for="description"
                                    class="form-label"
                                    >Project Description</label
                                >
                                <div class="form-floating">
                                    <textarea v-model="project.description" class="form-control" placeholder="Leave a comment here" id="description"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </template>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import axios from "axios";
import { reactive } from 'vue'
import { computed } from 'vue'
import { usePage } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

export default {
    components: {
        AppLayout,
        Link,
    },
    props: {
        project: Object,
    },
    setup() {
        const project = computed(() => usePage().props.value.project)
        return { project }
    },
    data() {
        // return {
            // project:{},
        // }
    },
    beforeMount() {
        // this.getProject();
    },
    methods: {
        // async getProject() {
        //     try {
        //         const project = (await axios.get(route('projects.get',), this.project)).data;
        //     } catch (error) {
        //         console.log(error)
        //     }
        // },
        async updateProject() {
            try {
                const project = (await axios.post(route('projects.update',this.project.id), this.project)).data;
                this.$inertia.visit(route('projects'));
            } catch (error) {
                console.log(error)
            }
        },
    },

};
</script>
