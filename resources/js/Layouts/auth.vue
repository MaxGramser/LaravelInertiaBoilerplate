<template>
    <div class="container m-auto max-w-4xl md:mt-20">
        <Link href="/app">
        <img src="/logo.png" class="m-auto md:max-w-2xl">
        </Link>
        <form class="shadow bg-white p-8 max-w-2xl border m-auto">
            <slot></slot>
        </form>
    </div>
</template>
<script setup>
</script>
