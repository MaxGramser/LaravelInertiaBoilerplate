<template>
    <Head title="testjeee"></Head>
    {{ $page.props.auth.user.name }}
    {{appStore.typeofproject}}
</template>

<script setup>

import {useAppStore} from "../Stores/MainStore.js";

const appStore = useAppStore();

</script>
