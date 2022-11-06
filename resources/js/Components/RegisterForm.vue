<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import OutlineButton from './OutlineButton.vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => { 
            form.reset('password', 'password_confirmation'),
            emit('alreadyRegistered', true)
        }
    });
};
</script>

<template>

    <Head title="Register" />

    <form @submit.prevent="submit">
        <div>
            <InputLabel for="name" value="Name" class="text-white" />
            <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus
                autocomplete="name" />
            <InputError class="mt-2" :message="form.errors.name" />
        </div>

        <div class="mt-4">
            <InputLabel for="email" value="Email" class="text-white"/>
            <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                autocomplete="username" />
            <InputError class="mt-2" :message="form.errors.email" />
        </div>

        <div class="mt-4">
            <InputLabel for="password" value="Password" class="text-white"/>
            <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                autocomplete="new-password" />
            <InputError class="mt-2" :message="form.errors.password" />
        </div>

        <div class="mt-4">
            <InputLabel for="password_confirmation" value="Confirm Password" class="text-white"/>
            <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                v-model="form.password_confirmation" required autocomplete="new-password" />
            <InputError class="mt-2" :message="form.errors.password_confirmation" />
        </div>

        <div class="flex flex-row justify-between mt-4 space-beetwen">
            <div @click="$emit('alreadyRegistered', true)" class="underline text-sm text-white hover:font-bold">
            Já é registrado?
            </div>

            <OutlineButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Finalizar Cadastro
            </OutlineButton>
        </div>
    </form>
</template>
