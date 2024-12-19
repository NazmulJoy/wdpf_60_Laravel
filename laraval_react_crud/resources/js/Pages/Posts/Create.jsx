import React from 'react';
import { useForm } from '@inertiajs/react';

export default function Create(){

    const { data, setData, post , errors } =useForm({
    title:"",
    body:""

})

    function handleSubmit(e){
        e.preventDefault();
        post(route('posts.store'))
       
    }

  return (
    <div>
        <h1>Post entry</h1>
        <form onSubmit={handleSubmit}>
            Title: <input type="text" name="title" placeholder="Enter Title" value={data.title} onChange={(e)=>setData('title',e.target.value)}/> <span>{errors.title}</span> <br />
            Details: <textarea name="body" placeholder="Enter Details" onChange={(e)=>setData('body',e.target.value)}>{data.body}</textarea><span>{errors.body}</span> <br />
            <button type='submit' name='submit'>Submit</button>

        </form>

    </div>
  )
}
