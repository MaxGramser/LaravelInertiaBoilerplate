<template>
    <Head title="Forgot Password"></Head>

    <h2 class="text-3xl">Forgot password</h2>
    <Link href="/auth/login" class="text-sm">Back to login</Link>

    <textinput v-model="form.email" :error="form.errors.email">Email</textinput>
    <div v-if="$page.props.status" class="text-red-500">{{ $page.props.status === 'passwords.user' ? 'User not known..' : '' }}</div>

    <button :disabled="form.processing" @click="form.post('/auth/forgot')" class="disabled:opacity-50 bg-white block mt-8 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Send Reset Link
    </button>
</template>

<script setup>

    import {useForm} from "@inertiajs/inertia-vue3";
    import Textinput from "../../components/textinput.vue";

    const form = useForm({
        email: null,
    })
</script>
