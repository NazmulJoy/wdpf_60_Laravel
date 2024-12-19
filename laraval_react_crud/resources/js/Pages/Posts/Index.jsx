import React from 'react';
import {  usePage } from '@inertiajs/react';
import  './style.css';


export default function Index(props) {
    const { posts,pgtitles } = usePage().props
  return (
    <div>
        <h1>{pgtitles}</h1>
        <h1>Post list</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur repellat molestiae corrupti fuga dolorum aliquid possimus recusandae quisquam. Adipisci quo, voluptatum corporis culpa reiciendis eos autem magni nobis eligendi delectus?</p>

        <table>
            <tr>
                <th>ID</th>
                <th>Tittle</th>
                <th>Details</th>
            </tr>
            {posts.map(({ id, title, body }) => (
            <tr>
                <td>{id}</td>
                <td>{title}</td>
                <td>{body}</td>
            </tr>
            ))}
        </table>

    </div>
  )
}
