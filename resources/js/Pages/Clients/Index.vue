<template>

    <Head title="Clients" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div>
                        <div>
                            <label for="">Search Artist</label>
                            <input type="text" @keydown.enter="search($event)" name="" id="" class="mb-10 text-slate-100 border-0 ms-3" style="width: 300px; border-bottom: 1px solid rgb(255, 255, 255); background-color: transparent; font-size: 30px;">
                            <Link href="/clients/create" class=" text-slate-100 p-3 float-right me-3">Add Singer</Link>
                        </div>
                        <div class="">
                            <div v-for="client in clients" :key="client.id">
                                <ClientCard :client="client" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>

<script setup>
import { computed } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientCard from '@/Components/ClientCard.vue';
import { Head, Link, router } from '@inertiajs/vue3';

const props = defineProps({
    clients: Array
})

function search(e) {
    router.visit('/clients/search/' + e.target.value, {
        only: ['clients']
    })
}

const clientCount = computed(() => props.clients.length);

</script>

<style>
    .res_btn{
        background-color: green;
        color: white;
        border-radius: 20px;
        padding: 10px;

    }
</style>
