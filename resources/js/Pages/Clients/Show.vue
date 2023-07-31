<template>
    <Head title="View Client" />

    <AuthenticatedLayout>
        <div style="display: grid; place-content: center; font-size: 40px;" class="mt-24">
            <div class="mt-10 flex">
                <img :src="client.picUrl" alt="Product photo" class="w-[500px] h-[500px] rounded-full">

                <div class="text-white m-5">
                    <div class="mb-2">
                        <b>Artist:</b> {{ client.artist }}
                    </div>
                    <div class="mb-2">
                        <b>Latest Song:</b> {{ client.music }}
                    </div>
                    <div class="mb-2">
                        <b>Followers:</b> {{ client.followers }}
                    </div>
                    <div class="mb-2">
                        <b>Artist Age:</b> {{ client.age }}
                    </div>
                    <div class="mb-2">
                        <b>Spotify Name:</b> {{ client.spotify }}
                    </div>
                    <div class="mb-2">
                        <b>Youtube Name:</b> {{ client.youtube }}
                    </div>
                    <div class="mb-2">
                        <b>Email:</b> {{ client.email }}
                    </div>
                    <hr>
                    <div class="m-4 text-center" style="margin-bottom: -75px;">
                        <a class="bg-slate-900 hover:bg-slate-800 duration-150 rounded-lg m-2 text-slate-100 p-5" :href="'/clients/email/' + client.id" as="button">Send Email</a>
                        <a class="bg-slate-900 hover:bg-slate-800 duration-150 rounded-lg m-2 text-slate-100 p-5" :href="'/clients/pdf/' + client.id" as="button"  target="_blank">Export PDF</a>
                        <Link class="bg-slate-900 hover:bg-slate-800 duration-150 rounded-lg m-2 text-slate-100 p-5" :href="'/clients/' + client.id" method="delete" as="button">Delete</Link>
                        <a class="bg-slate-900 hover:bg-slate-800 duration-150 rounded-lg m-2 text-slate-100 p-5" :href="'/clients/edit/' + client.id" as="button">Edit</a>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue'

const page = usePage()
const user = computed(() => page.props.auth.user)

const props = defineProps({
    'client': Object
})
</script>
