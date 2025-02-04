<template>
    <div class="w-[400px] mx-auto mt-20">
        <Mantra :data="form"/>
    </div>
</template>
<script setup>
    import { useForm } from "@inertiajs/vue3"
    import Mantra from "../Components/Mantra"

    defineProps({
        form: {
            required: true,
            type: [Object],
        },
    })

    const states = useForm({
        name: "",
        email: "",
        password: "",
    })
</script>
