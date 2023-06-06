<template>
    <Head title="Reset Password"></Head>

    <h2 class="mb-8">Reset password</h2>

    <label class="mb-2 block">New Password</label>
    <input v-model="form.password" type="password" class="form-input rounded w-full">
    <div v-if="form.errors.password" class="text-red-500">{{ form.errors.password }}</div>

    <label class="mb-2 mt-8 block">Comfirm Password</label>
    <input v-model="form.password_confirmation" type="password" class="form-input rounded w-full">
    <div v-if="form.errors.password_confirmation" class="text-red-500">{{ form.errors.password_confirmation }}</div>

    <button :disabled="form.processing" @click="form.post('/auth/reset')" class="disabled:opacity-50 bg-white block mt-8 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Reset Password
    </button>
</template>

<script setup>

import {useForm} from "@inertiajs/inertia-vue3";

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
