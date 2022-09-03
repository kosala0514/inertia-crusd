<template>
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky "
        id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                </div>
                <li class="nav-item dropdown pe-3 d-flex align-items-center ">
                    <a href="javascript:;" class="nav-link text-white p-0" id="notification-dropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                </li>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item dropdown d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="user-dropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Name</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-2 me-sm-n4" aria-labelledby="user-dropdown">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="{{ route('profile.show') }}">
                                    <i class="fa fa-user-circle-o me-sm-1"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <Link class="dropdown-item border-radius-md" href="/logout" as="button" method="post">
                                <i class="ni ni-user-run me-sm-1"></i>
                                <span> Logout</span>
                                </Link>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link,
    },
    methods: {

    },
}

</script>

<style lang="css">

</style>
