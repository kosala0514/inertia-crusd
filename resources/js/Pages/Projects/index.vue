<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="header">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="py-4 col align-items-center">
                            <h6 class="mb-0 h2 text-white d-inline-block">Dashboard</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item">
                                        <Link href="/">
                                            <i class="fas fa-home"></i>
                                        </Link>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Dashboard
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Projects
                                    </li>
                                </ol>
                            </nav>
                            <a href="" class="btn btn-success">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <template #content>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="row">
                        <h3>Projects</h3>
                    </div>
                </div>
            </div>
        </template>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
export default {
    components: {
        AppLayout,
    },
}
</script>
