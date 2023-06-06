<template>
    <Head title="Login"></Head>

    <Link href="/auth/register">Do you want to create an acount?</Link>

    <label class="mb-2 mt-8 block">Email</label>
    <input v-model="form.email" class="form-input rounded w-full" placeholder="Email">
    <div v-if="form.errors.email" class="text-red-500">{{ form.errors.email }}</div>

    <label class="mb-2 mt-8 block">Password</label>
    <input v-model="form.password" class="form-input rounded w-full" type="password">
    <div v-if="form.errors.password" class="text-red-500">{{ form.errors.password }}</div>
    <Link href="/auth/forgot">forgot password...</Link>

    <label class="mb-2 mt-8 block">Remember me</label>
    <input v-model="form.remember" class="form-checkbox" type="checkbox">

    <button :disabled="form.processing" @click="form.post('/auth/login')" class="disabled:opacity-50 bg-white block mt-8 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Login
    </button>
</template>
<script setup>

import {useForm} from "@inertiajs/inertia-vue3";

const form = useForm({
    email: null,
    password: null,
    remember: false,
})
</script>
