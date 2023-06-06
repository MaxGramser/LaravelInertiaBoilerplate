<template>
    <div class="container m-auto max-w-4xl md:mt-20">
        <Link href="/app">
            <img src="/acme-logo.jpg" class="m-auto md:max-w-2xl">
        </Link>
        <form class="shadow-2xl mb-8 bg-white p-8 max-w-2xl border m-auto">
            <slot></slot>
        </form>
    </div>
</template>
<script setup>
</script>
