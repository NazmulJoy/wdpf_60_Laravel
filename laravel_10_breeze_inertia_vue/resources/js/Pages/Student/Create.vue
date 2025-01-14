<template>
  <div class="container">
       <br>
  <form @submit.prevent="submit" class="form">
                            <div class="mb-4 form-group">
                                <label 
                                    for="name" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Name:</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="Enter Name" 
                                    id="name"
                                    v-model="form.name"
                                     />

                            </div>

                            <div class="mb-4 form-group">
                                <label 
                                    for="address" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Address:</label>
                                <textarea 
                                    class="form-control" id="address" 
                                     v-model="form.address"
                                    placeholder="Enter Address"></textarea>
                            </div>
                            <div class="mb-4 form-group">
                                <label 
                                    for="dob" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Date of Birth:</label>
                                <input 
                                    type="date" 
                                    class="form-control" 
                                    placeholder="Enter Date of Birth"  
                                    id="dob"
                                     v-model="form.dob"
                                     />
                            </div>
                            <div class="mb-4 form-group">
                                <label 
                                    for="gender" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Gender:</label>
                                <input 
                                    type="radio" 
                                    class="form-control" 
                                     name="gender"
                                    id="gender1"
                                    value="male"
                                     v-model="form.gender"
                                     />Male &nbsp;
                                     <input 
                                    type="radio" 
                                    class="form-control" 
                                     name="gender"
                                    id="gender2"
                                    value="female"
                                     v-model="form.gender"
                                     />Female
                            </div>
                            <div class="mb-4 form-group">
                                <label 
                                    for="district" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    District:</label>
                                    <select class="form-control" name="" id="district"  v-model="form.district">
                                      <option disabled value="">Select one</option>
                                      <option>Dhaka</option>
                                      <option>Narayanganj</option>
                                      <option>Cumilla</option>
                                      <option>Chittagong</option>
                                    </select>
                            </div>
                            <div class="mb-4 form-group">
                                <label 
                                    for="languages" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Language:</label>
                                <input 
                                    type="checkbox" 
                                    class="form-control" 
                                   
                                   
                                    value="PHP"
                                     v-model="form.languages"
                                     /> PHP &nbsp;
                                     <input 
                                    type="checkbox" 
                                    class="form-control" 
                                    
                                    
                                    value="Javascript"
                                     v-model="form.languages"
                                     /> Javascript &nbsp;
                                     <input 
                                    type="checkbox" 
                                    class="form-control" 
                                   
                                   
                                    value="Laravel"
                                     v-model="form.languages"
                                     /> Laravel &nbsp;
                                     <input 
                                    type="checkbox" 
                                    class="form-control" 
                                    
                                  
                                    value="React"
                                     v-model="form.languages"
                                     /> React
                            </div>
                            <div class="mb-4 form-group">
                                <label 
                                    for="photo" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Photo:</label>
                                    <input type="file" @input="form.photo = $event.target.files[0]" />
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white">
                                Submit
                            </button>

                        </form>
                    </div>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3';

    const form = useForm({
        name: '',
        dob: '',
        address: '',
        gender: '',
        district: '',
        languages: [],
        photo: null,
    })
    const submit = () => {
  form.post("/students");
};
</script>


<style>

</style>