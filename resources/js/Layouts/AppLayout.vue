<template>
    <div>
        <Head :title="title ? title : 'Yoo ERP'">
        </Head>
        <div class="min-height-150 bg-header position-absolute w-100"></div>
        <SideBar />
        <main class="main-content position-relative border-radius-lg ">
            <NavBar />
            <slot name="header" />
            <div class="container-fluid py-4">
                <slot name="content" />
            </div>
            <Footer />
        </main>
    </div>
</template>


<script>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3'
import SideBar from '@/Components/Main/SideBar.vue';
import NavBar from '@/Components/Main/NavBar.vue';

export default {
    components: {
        Head,
        Link,
        SideBar,
        NavBar,
    },
    props: {
        title: String,
    },
    data() {

    },
    mounted() {
    },
    methods: {
        logout() {
            Inertia.post(route('logout'));
        }
    },
}
</script>

<style lang="scss">
body {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh;
}

.bg-header {
    background-color: #55699f;
}

.table-responsive {
    overflow: auto;
}
</style>
