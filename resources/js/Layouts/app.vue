<template>
    <header>
        <Link href="/app">Dashboard</Link>
        <Link href="/auth/logout" as="button" method="post">Logout</Link>
    </header>

    {{ $page.props.auth.user.studio_name }}

    <slot></slot>
</template>

<script setup>


</script>
