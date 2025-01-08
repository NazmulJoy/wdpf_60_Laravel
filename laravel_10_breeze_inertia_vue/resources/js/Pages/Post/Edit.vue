<template>
    <div class="container"> <br>
        <Link
        :href="route('posts.index')"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white"
        >post List</Link
    > <br> <br> <br>
    <form @submit.prevent="update" class="form">
                            <div class="mb-4 form-group">
                                <label 
                                    for="title" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Title:</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="Enter Title" 
                                    id="title"
                                    v-model="form.title" />

                            </div>

                            <div class="mb-4 form-group">
                                <label 
                                    for="body" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Body:</label>
                                <textarea 
                                    class="form-control" id="body" 
                                    v-model="form.body" 
                                    placeholder="Enter Body"></textarea>
                            </div>

                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white">
                                Update
                            </button>

                        </form>
    </div>
   
</template>

<script setup>
import { Link, usePage, useForm } from "@inertiajs/vue3";
const { post } = usePage().props;
const form = useForm({
    title: post.title,
    body: post.body,

});
const update = () => {
  form.put(route('posts.update', post.id));
};
</script>

<style>

</style>