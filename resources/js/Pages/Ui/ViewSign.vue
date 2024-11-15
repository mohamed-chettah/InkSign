<script setup>

import ViewFooter from "@/js/Pages/Ui/ViewFooter.vue";
import {ref} from "vue";

let message = ref('Hello World');

</script>

<template>
    <div class="bg-gray-400 col-span-3">

        <div class="bg-[#F5F5F5] col-span-3">
            Main Part
        </div>

        <div v-html="previewHtml" class="signature-preview"></div>

        <ViewFooter />
    </div>
</template>

<style>
.signature-preview {
    border: 1px solid #ccc;
    padding: 20px;
    margin-top: 20px;
    background-color: #f9f9f9;
}
</style>
