<template>
    <label class="mb-1 mt-8 block"><slot></slot></label>
    <input
        :type="type"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        class="form-input rounded w-full focus:border-amber-400"
    >
    <div v-if="error" class="text-red-500">{{ error }}</div>
</template>

<script setup>
    defineProps({
        modelValue: {},
        error: {},
        type: {default: 'text'},
    })
    defineEmits(['update:modelValue'])
</script>
