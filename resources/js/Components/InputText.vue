<template>
    <label>
        <span class="block text-sm/6 font-medium text-gray-900">{{ label }}</span>

        <input :type="type" class="block  border outline-none w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
    </label>
</template>
<script setup>
    defineProps({
        label: {
            type: String,
        },

        type: {
            type: String,
        },
    })
</script>
