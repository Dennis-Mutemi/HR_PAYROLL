<script setup>
//import Layout from './Layouts/Layout.vue';
// defineOptions({
//     layout:Layout
// });
defineProps({
    User: String
})
// import { Link,Head } from '@inertiajs/vue3';
</script>

<template>
     <!-- <Head>
       <title>Home</title>
   </Head> -->
   <Head :title="` | ${$page.component}`"/>
    <div>
        <H1 class="container">Hello {{ $page.props.auth.name }}</H1>
    </div>
</template>

<style lang="scss" scoped>

</style>