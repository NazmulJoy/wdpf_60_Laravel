<template>
    <div class="container">
        <h1 class="display-1">Welcome to Vue with Laravel</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="x in posts" :key="x.id">
                <td>{{ x.title }}</td>
                <td>{{ x.body }}</td>
                <td>
                    <button @click="deletePost(x.id)">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button> &nbsp;
                    <Link :href="route('posts.edit', x.id)"
                        ><i class="fa fa-edit" aria-hidden="true"></i></Link>
                </td>
            </tr>
            </tbody>
        </table>
        <br />
    <Link
        :href="route('posts.create')"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white"
        >New Entry</Link
    >
    </div>
    
</template>

<script setup>
import { Link, usePage, useForm } from "@inertiajs/vue3";

// const { posts } = usePage().props;
const form = useForm({});
const deletePost = (id) => {
    // form.delete(`posts/${id}`);
    form.delete(route('posts.destroy', {id}))
};
defineProps({
    posts: {
        type: Array,
        default: () => [],
    }
})
</script>

<!--<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
    }
</script> -->

<style scoped></style>
