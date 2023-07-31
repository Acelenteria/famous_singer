<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
// import MailCard from '@/Components/MailCard.vue';

const form = useForm({
    subject: '',
    message: ''
})

const submit = () => {
    form.post('/admin/send-mail')

    form.subject = ''
    form.message = ''
}

const props = defineProps({
    message: Object
})


var wordList = ["Attention Library Patrons!", "Alert: Book Return Reminder", "Important Notice: Book Returns", "Urgent Book Return Request", "Reminder: Return Your Books"];

const generateWord = () => {
  // Get a random word from the wordList
  const randomIndex = Math.floor(Math.random() * wordList.length);
  const generatedWord = wordList[randomIndex];

  // Assign the generated word to the input field
  form.subject = generatedWord;
};
// console.log(props.message)
</script>

<template>
    <AuthenticatedLayout>
        <div style="display: grid; place-content: center;">
            <div style="font-size: 30px;">
                <form @submit.prevent="submit" class="justify-between mx-auto">
                    <div class="text-white">
                        <label for=""><b>Subject</b></label>
                        <input placeholder="Input Here!" style="font-size: 25px; background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="text" id="title" v-model="form.subject" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Message</b></label>
                        <input placeholder="Input Here!" style="font-size: 25px; background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="text" id="date" v-model="form.message" class="text-white mb-10 border-0 ">
                    </div>
                     <br>
                    <button style="width: 175px;" type="submit" class="float-right bg-white text-black hover:bg-black hover:text-white duration-100 p-2">Send Message</button>
                </form>
            </div>
        </div>
    <!-- <div style="display: grid; place-content: center;">
        <form @submit.prevent="submit">
           <div class="mt-10 bg-blue-800 p-10 text-white text-center" style="font-size: 30px; width: 500px;">
            <div class="text-white">
                        <label for=""><b>Wedding Title</b></label>
                        <input style="background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="text" id="title" v-model="form.title" class="text-white mb-10 border-0">
                    </div>
                    <div class="text-white">
                        <label for=""><b>Date</b></label>
                        <input style="background-color: transparent; border-bottom: 1px solid white; width: 475px;" required type="date" id="date" v-model="form.date" class="text-white mb-10 border-0 ">
                    </div>
            <b>Subject:</b> <br> <input class="text-black" v-model="form.subject" type="text" id="subject"> <br>
            <b>Message:</b> <br> <textarea class="text-black" rows="5" cols="50" v-model="form.message" type="text" id="message"></textarea> <br>
            <button style="font-size: 20px;" type="submit" class="text-white px-4 py-1.5 rounded-md bg-blue-500">Send Message</button>
           </div>
        </form>
    </div> -->

    </AuthenticatedLayout>
</template>
