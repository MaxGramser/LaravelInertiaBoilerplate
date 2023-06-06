<template>
    <Head title="Forgot Password"></Head>

    <h2 class="mb-8">Forgot password</h2>
    <label class="mb-2 block">Email</label>
    <input v-model="form.email" class="form-input rounded w-full" placeholder="Email">
    <div v-if="form.errors.email" class="text-red-500">{{ form.errors.email }}</div>

    <button :disabled="form.processing" @click="form.post('/auth/forgot')" class="disabled:opacity-50 bg-white block mt-8 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Send Reset Link
    </button>
</template>
<script setup>

import {useForm} from "@inertiajs/inertia-vue3";

const form = useForm({
    email: null,
})
</script>
