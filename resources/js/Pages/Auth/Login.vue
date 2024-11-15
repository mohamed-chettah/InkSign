<script setup>
import {reactive, ref} from "vue";
import logoUrl from '@/images/logo-test.png';

const logo = ref(logoUrl);

const redirectToTwitter = () => {
    window.location.href = "auth/twitter";
};
</script>

<template>

    <div class="flex bg-white mx-32 mt-5 flex-col items-center gap-24 justify-center">
        <div class="flex gap-52 p-32 justify-center shadow-xl ">

            <div class="">
                <img :src="logo" alt="Placeholder" class="w-20 h-20 rounded-lg" />

                <p class="text-xl font-medium mt-6">Get Started</p>

                <p class="text-lg font-light mt-6 text-gray-500">Welcome to MC Studio - Let's create your account</p>

                <div class=" my-10 divider"></div>



                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Email
                        </label>
                        <input value="hi@mc.fr" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="">
                    </div>

                    <div class="mb-4">
                        <div class="flex justify-between">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Password
                            </label>

                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Forgot?
                            </label>
                        </div>

                        <input class="rounded-lg shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text">
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-black-100 via-black-200 to-gold-200 text-white font-bold py-2 px-4 rounded-lg">
                        Sign In
                    </button>

            </div>

        </div>


        <button  @click="redirectToTwitter" class="w-full bg-gradient-to-r from-black-100 via-black-200 to-gold-200 text-white font-bold py-2 px-4 rounded-lg">
            Sign In to your X account
        </button>


    </div>

</template>

<style scoped>

</style>
