<template>
    <Head title="Login"></Head>

    <h2 class="text-3xl">Login</h2>

    <Link href="/auth/register" class="text-sm">Do you want to create an acount?</Link>

    <label class="mb-1 mt-8 block">Email</label>
    <input v-model="form.email" class="form-input rounded w-full" placeholder="Email">
    <div v-if="form.errors.email" class="text-red-500">{{ form.errors.email }}</div>
    <div v-if="!$page.props.attempt" class="text-red-500">{{ $page.props.attempt === false ? 'Credentials do not match our records...' : '' }}</div>

    <label class="mb-1 mt-8 block">Password</label>
    <input v-model="form.password" class="form-input rounded w-full" type="password">
    <div v-if="form.errors.password" class="text-red-500">{{ form.errors.password }}</div>
    <Link href="/auth/forgot" class="text-sm text-gray-200">forgot password...</Link>

    <div class="mt-8 flex items-center">
        <input v-model="form.remember" class="form-checkbox rounded" type="checkbox">
        <label class="ml-2">Remember me</label>
    </div>

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
