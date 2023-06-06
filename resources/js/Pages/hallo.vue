<template>
    testjeeee
    {{ appStore.typeofproject }}
</template>

<script setup>
import {useAppStore} from "../Stores/MainStore.js";

const appStore = useAppStore();

appStore.typeofproject = 'hoi';
</script>
