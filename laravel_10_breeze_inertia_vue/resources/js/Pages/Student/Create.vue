<template>
  <div class="container">
       <br>
  <form @submit.prevent="this.submit" class="form">
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
                                    v-model="name"
                                     />

                            </div>

                            <div class="mb-4 form-group">
                                <label 
                                    for="address" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Address:</label>
                                <textarea 
                                    class="form-control" id="address" 
                                     v-model="address"
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
                                     v-model="dob"
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
                                     v-model="gender"
                                     />Male &nbsp;
                                     <input 
                                    type="radio" 
                                    class="form-control" 
                                     name="gender"
                                    id="gender2"
                                    value="female"
                                     v-model="gender"
                                     />Female
                            </div>
                            <div class="mb-4 form-group">
                                <label 
                                    for="district" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    District:</label>
                                    <select class="form-control" name="" id="district"  v-model="district">
                                      <option disabled value="">Select one</option>
                                      <option>Dhaka</option>
                                      <option>Narayanganj</option>
                                      <option>Cumilla</option>
                                      <option>Chittagong</option>
                                    </select>
                            </div>
                            <div class="mb-4 form-group">
                                <label 
                                    for="langauge" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Language:</label>
                                <input 
                                    type="checkbox" 
                                    class="form-control" 
                                    name="language"
                                   
                                    value="PHP"
                                     v-model="language"
                                     /> PHP &nbsp;
                                     <input 
                                    type="checkbox" 
                                    class="form-control" 
                                    name="language"
                                    
                                    value="Javascript"
                                     v-model="language"
                                     /> Javascript &nbsp;
                                     <input 
                                    type="checkbox" 
                                    class="form-control" 
                                    name="language3"
                                   
                                    value="Laravel"
                                     v-model="language"
                                     /> Laravel &nbsp;
                                     <input 
                                    type="checkbox" 
                                    class="form-control" 
                                    name="language"
                                  
                                    value="React"
                                     v-model="language"
                                     /> React
                            </div>
                            <div class="mb-4 form-group">
                                <label 
                                    for="photo" 
                                    class="block text-gray-700 text-sm font-bold mb-2">
                                    Photo:</label>
                                <input 
                                    type="file" 
                                    class="form-control" 
                                    name="photo" 
                                    id="photo"
                                    
                                     />
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white">
                                Submit
                            </button>

                        </form>
                    </div>
</template>

<!-- <script setup>
import {useForm,Link} from '@inertiajs/vue3';

    const form = useForm({
        name: '',
        dob: '',
        address: '',
        gender: '',
        district: '',
        language: [],
        photo: '',
    })
    const submit = () => {
  form.student("/students");
};
</script> -->
<script>
export default {
    data(){
        return{
            name : "",
            address: "",
            dob: "",
            gender: "",
            language: [],
            district: "",
           
        }
    },
    methods: {
        Submit(){
          axios.post(route('students.store'),{name:this.name,address:this.address,dob:this.dob,gender:this.gender,language:this.language,district:this.district})

        }
    }
}
</script>
<script setup>
import axios from 'axios';

</script>
<style>

</style>