<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import LoginForm from '@/Components/LoginForm.vue';
import RegisterForm from '@/Components/RegisterForm.vue';
import { ref } from 'vue'

const is_signing_up = ref(false)

const emit = defineEmits(['change', 'update'])
</script>

<template>

    <Head title="Bem Vindo" />

    <div class="relative flex items-center min-h-screen min-w-full bg-scroll sm:pt-0 px-5"
        style="background-image: url('assets/up-bg.jpg'); background-size: cover;">

        <div class="flex flex-row min-h-screen w-full py-5">
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
                <!-- Área de login -->
                <div v-if="is_signing_up == false"
                    class="flex w-full flex-col max-w-4/5 place-content-center items-center max-h-2/5 my-2 px-12 md:px-10 py-12 rounded-lg"
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
                            <!-- Form de login -->
                            <LoginForm />
                        </div>
                    </div>
                </div>

                <!-- Área de registro -->
                <div class="flex flex-col place-content-center items-center max-h-2/5 my-2 px-10 py-12 rounded-lg"
                    style="background-color: rgb(26,47,48, 0.6);">
                    <div class="flex place-self-center">
                        <div v-if="is_signing_up == false" class="mx-5 font-bold text-white text-2xl">
                            <p class="hidden md:flex mx-5 text-center">É novo por aqui? </p>
                            <p class="mx-5 text-center text-blue-500 hover:text-blue-600 focus:text-blue-600"><a
                                    @click="is_signing_up = true">Registre-se agora</a></p>
                        </div>
                        <!-- Form de registro -->
                    </div>
                    <div v-if="is_signing_up == true" class="flex place-self-center w-full">
                        <div class="flex flex-col w-full">
                            <div class="flex place-self-center mt-8">
                                <!-- logo -->
                                <img class="object-cover rounded-full shadow mt-2 lg:mt-0" src="assets/nyx-logo.jpg"
                                    alt="Nyx Tecnology">
                            </div>
                            <div class="flex flex-row place-self-center mt-8">
                                <div class="flex md:mx-5 font-bold text-white">
                                    <p class="text-3xl mx-5 text-left">Junte-se a nos você tambem
                                    </p>
                                </div>
                            </div>
                            <div class="flex w-full place-content-center mt-3">
                                <div class="w-full md:w-4/5">
                                    <!-- Form de registro -->
                                    <RegisterForm @already-registered="() => is_signing_up = false" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>