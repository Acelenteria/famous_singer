<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';
import NavLink from '@/Components/NavLink.vue';

const props = defineProps({
    clients: Array,
    users: Array
})



</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-32">
                    <h2 class="text-xl p-2 rounded-xl text-center text-gray-100 leading-tight mb-10" style="font-size: 30px;">

                        MelodyVault is an innovative and reliable system that embodies the essence of safeguarding and conveniently accessing records related to singers' careers. As the name suggests, it serves as a secure and protected digital vault, preserving the cherished memories and essential details of each singer's professional journey. With SingerRecords, artists and music enthusiasts can trust in the privacy and longevity of their records, ensuring that their musical achievements and milestones remain immortalized and readily available for years to come.

<br> <br>


Additionally, MelodyVault offers a comprehensive and user-friendly interface that allows singers to organize and manage their music releases, performances, awards, collaborations, and other significant events all in one place. This centralized hub empowers artists to track their growth and progress over time, enabling them to make informed decisions about their careers and artistic direction. Record labels, talent scouts, and industry professionals also benefit from SingerRecords as they can explore a wealth of valuable data, discover emerging talents, and identify trends shaping the music landscape. With SingerRecords, the legacy of each singer can be meticulously documented, ensuring that their impact on the world of music is remembered and celebrated for generations to come.
                    </h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div class="flex flex-wrap">

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

