<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({

    artist: '',
    music: '',
    followers: '',
    age: '',
    spotify: '',
    youtube: '',
    email: '',
    pic: null
});

function submit() {

    form.post('/clients/');
}

</script>

<template>
    <Head title="Create Client" />
    <AuthenticatedLayout>
        <div style="display: grid; place-content: center;">
            <div style="font-size: 30px;">
                <form @submit.prevent="submit" class="justify-between mx-auto">
                    <div class="text-white">
                        <label for=""><b>Artist Name</b></label>
                        <input placeholder="Input Here!" style="font-size: 25px; background-color: transparent; width: 475px;" required type="text" id="artist" v-model="form.artist" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Latest Song</b></label>
                        <input placeholder="Input Here!" style="font-size: 25px; background-color: transparent; width: 475px;" required type="text" id="music" v-model="form.music" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Total Followers</b></label>
                        <input placeholder="Input Here!" style="font-size: 25px; background-color: transparent; width: 475px;" required type="text" id="followers" v-model="form.followers" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Artist Age</b></label>
                        <input placeholder="Input Here!" style="font-size: 25px; background-color: transparent; width: 475px;" required type="text" id="age" v-model="form.age" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Spotify Name</b></label>
                        <input placeholder="Input Here!" style="font-size: 25px; background-color: transparent; width: 475px;" required type="text" id="spotify" v-model="form.spotify" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Youtube Name</b></label>
                        <input placeholder="Input Here!" style="font-size: 25px; background-color: transparent; width: 475px;" required type="text" id="youtube" v-model="form.youtube" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Email</b></label>
                        <input placeholder="Input Here!" style="font-size: 25px; background-color: transparent; width: 475px;" required type="email" id="email" v-model="form.email" class="text-white mb-10 border-0">
                    </div>
                    <div class=" text-white">
                        <label for="pic"><b>Profile Picture</b></label> <br>
                        <input type="file" @input="form.pic = $event.target.files[0]" class="h-full border-gray-400 rounded text-center" accept="image/png" />
                        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                            {{ form.progress.percentage }}%
                        </progress>
                        </div> <br>
                    <button style="width: 175px;" type="submit" class="float-right bg-white text-black hover:bg-black hover:text-white duration-100 p-2">Create</button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
