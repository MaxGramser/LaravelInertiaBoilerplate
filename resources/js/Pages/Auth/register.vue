<template>
    <Head title="Register"></Head>

    <h2 class="text-3xl">Register</h2>
    <Link href="/auth/login" class="text-sm">Do you already have an acount?</Link>

    <textinput v-model="form.name" :error="form.errors.name">Your Name</textinput>
    <textinput v-model="form.email" :error="form.errors.email">Email</textinput>
    <textinput v-model="form.password" type="password" :error="form.errors.password">Password</textinput>
    <textinput v-model="form.password_confirmation" type="password" :error="form.errors.password_confirmation">Password confirmation</textinput>

    <button :disabled="form.processing" @click="form.post('/auth/register')" class="disabled:opacity-50 bg-white block mt-8 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Register
    </button>
</template>

<script setup>
    import {useForm} from "@inertiajs/inertia-vue3";
    import Textinput from "../../components/textinput.vue";

    const form = useForm({
        name: null,
        email: null,
        password: null,
        studio_name: null,
        password_confirmation: null,
    })
</script>
