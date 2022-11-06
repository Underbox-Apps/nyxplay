<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Login from '@/Components/LoginForm.vue';

defineProps({})
</script>

<template>

    <Head title="Bem Vindo" />

    <div class="relative flex items-center min-h-screen min-w-screen bg-scroll sm:pt-0 px-5"
        style="background-image: url('assets/up-bg.jpg')">

        <div class="flex flex-row min-h-screen w-screen py-5">
            <div class="hidden lg:flex max-w-4xl mr-auto sm:px-6 lg:px-8 lg:ml-2 lg:py-5 rounded-lg">
                <div class="flex place-self-center mt-8 overflow-hidden sm:rounded-lg">
                    <div class="mx-5 font-bold text-white">
                        <p class="text-5xl">
                            Encontre aqui os mais famosos filmes e series que sua mente pode imaginar.<br>
                        </p>
                    </div>
                </div>
            </div>


            <div class="flex flex-col w-full lg:max-w-xl place-content-start md:place-content-center">
                <div class="flex w-full flex-col max-w-4/5 place-content-center items-center max-h-2/5 my-2 px-12 md:px-10 py-12 rounded-lg"
                    style="background-color: rgb(26,47,48, 0.6);">

                    <div class="flex place-self-center mt-8">
                        <!-- logo -->
                        <img class="object-cover rounded-full shadow mt-2 lg:mt-0" src="assets/nyx-logo.jpg"
                            alt="Nyx Tecnology">
                    </div>
                    <div class="hidden md:flex place-self-center mt-8">
                        <div class="mx-5 font-bold text-white">
                            <p class="text-3xl mx-5 text-center">Você está preparado para se emocionar conosco?</p>
                        </div>
                    </div>
                    <div class="flex w-full place-content-center mt-3">
                        <div class="w-full md:w-4/5">
                            <Login />
                        </div>
                    </div>
                </div>
                <div class="flex flex-col place-content-center items-center max-h-2/5 my-2 px-10 py-12 rounded-lg"
                    style="background-color: rgb(26,47,48, 0.6);">
                    <div class="flex place-self-center">
                        <div class="mx-5 font-bold text-white text-2xl">
                            <p class="hidden md:flex mx-5 text-center">É novo por aqui? </p>
                            <p class="mx-5 text-center text-blue-500 hover:text-blue-600 focus:text-blue-600"><a
                                    href="http://">Registre-se agora</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
