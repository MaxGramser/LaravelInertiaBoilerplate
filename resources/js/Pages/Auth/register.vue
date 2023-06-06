<template>
    <Head title="Login"></Head>

    <Link href="/auth/login">Do you alreay have an acount?</Link>

    <label class="mb-2 mt-8 block">Name</label>
    <input v-model="form.name" class="form-input rounded w-full" placeholder="Name">
    <div v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</div>

    <label class="mb-2 mt-8 block">Email</label>
    <input v-model="form.email" class="form-input rounded w-full" placeholder="Email">
    <div v-if="form.errors.email" class="text-red-500">{{ form.errors.email }}</div>

    <label class="mb-2 mt-8 block">Password</label>
    <input v-model="form.password" class="form-input rounded w-full" type="password">
    <div v-if="form.errors.password" class="text-red-500">{{ form.errors.password }}</div>

    <label class="mb-2 mt-8 block">Password confirmation</label>
    <input v-model="form.password_confirmation" class="form-input rounded w-full" type="password">
    <div v-if="form.errors.password_confirmation" class="text-red-500">{{ form.errors.password_confirmation }}</div>

    <button :disabled="form.processing" @click="form.post('/auth/register')" class="bg-white block mt-8 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Register
    </button>
</template>
<script setup>

import {useForm} from "@inertiajs/inertia-vue3";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
})
</script>
