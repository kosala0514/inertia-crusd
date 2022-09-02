<template>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" :href="route('dashboard')">
                <img src="/img/logo/logo.png" alt="main_logo" width="200">
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <Link href="/" :class="{ 'active': route().current() == 'dashboard' }"
                        class="active-preloader nav-link" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </Link>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Main</h6>
                </li>
            </ul>
        </div>
    </aside>
</template>


<script>
import { Link } from '@inertiajs/inertia-vue3'
import isArray from 'lodash/isArray';

export default {
    components: {
        Link,
    },
    methods: {
        isActive(route, path) {
            if (isArray(path)) {
                return path.includes(route);
            }
        },
    },
}

</script>

<style lang="scss">
.navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link {
    padding-left: 15px;
    padding-bottom: 0.1rem;
    padding-top: 0.1rem;
}
</style>
