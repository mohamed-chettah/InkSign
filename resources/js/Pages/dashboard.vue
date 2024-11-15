<script setup>
import {router} from "@inertiajs/vue3";
import {route} from "ziggy-js";
import { Link } from '@inertiajs/vue3'

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <Link href="/logout" method="get" as="button" type="button">Logout</Link>
</template>


