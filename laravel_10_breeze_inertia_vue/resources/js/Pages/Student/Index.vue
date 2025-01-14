<template>
    <div class="container">
        <h1 class="display-1">Welcome to Vue with Laravel</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>District</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Language</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="x in students" :key="x.id">
                    <td>{{ x.name }}</td>
                    <td>{{ x.address }}</td>
                    <td>{{ x.district }}</td>
                    <td>{{ x.dob }}</td>
                    <td>{{ x.gender }}</td>
                    <td>
                        {{
                            JSON.parse(x.languages).join(", ")
                        }}
                    </td>
                    <td>
                        <img
                            :src="`/images/${x.photo}`"
                            alt=""
                            style="width: 100px; height: auto"
                        />
                    </td>
                    <td>
                        <button @click="deletePost(x.id)">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        &nbsp;
                        <Link :href="route('students.edit', x.id)"
                            ><i class="fa fa-edit" aria-hidden="true"></i
                        ></Link>
                    </td>
                </tr>
            </tbody>
        </table>
        <br />
        <Link
            :href="route('students.create')"
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
    form.delete(route("students.destroy", { id }));
};
defineProps({
    students: {
        type: Array,
        default: () => [],
    },
});
</script>

<style></style>
