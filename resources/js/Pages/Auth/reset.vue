<template>
    <Head title="Reset Password"></Head>

    <h2 class="text-3xl">Reset password</h2>

    <textinput v-model="form.password" type="password" :error="form.errors.password">New password</textinput>
    <textinput v-model="form.password_confirmation" type="password" :error="form.errors.password_confirmation">Confirm new password</textinput>

    <button :disabled="form.processing" @click="form.post('/auth/reset')" class="disabled:opacity-50 bg-white block mt-8 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Reset Password
    </button>
</template>

<script setup>
    import {useForm} from "@inertiajs/inertia-vue3";
    import Textinput from "../../components/textinput.vue";

    const urlParams = new URLSearchParams(window.location.search);
    const token = urlParams.get('token');
    const email = urlParams.get('email');

    const form = useForm({
        password: '',
        password_confirmation: '',
        email: email,
        token: token,
    })
</script>
