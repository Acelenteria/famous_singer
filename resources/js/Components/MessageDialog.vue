<template>
    <div class="mt-5" style="display: grid; place-content: center;">
        <div v-if="messages.err" class="bg-slate-900 text-white p-3 rounded text-center" style="width: 580px;">
            {{ messages.err }}
        </div>
        <div v-if="messages.info" class="bg-slate-100 text-black p-3 rounded text-center" style="width: 580px;">
            {{ messages.info }}
        </div>
    </div>
</template>

<script setup>

const props = defineProps({
    messages: Object
})

</script>
