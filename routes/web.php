<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home',['title'=>'Home Page']);
});
 
Route::get('/about', function () {
    return view('about',['title'=>'About','name'=>'Imam Maarif']);
});
Route::get('/posts', function () {
    return view('posts',['title'=>'Blog', 'posts'=>[
        [
            'id'=>1,
            'slug'=>'judul-artikel-1',
        'title'=>'Judul Artikel 1',
        'author'=>'Imam Maarif',
        'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet doloribus 
        ex nobis voluptatibus vel possimus vitae expedita autem tempora saepe tempore
         asperiores maiores, quos, dolorum odit. Facilis suscipit consectetur tempora!'
        
        ],

        [
            'id'=>2,
            'slug'=>'judul-artikel-2',
            'title'=>'Judul Artikel 2',
            'author'=>'Admin',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Expedita fuga excepturi qui voluptas facilis odio enim cupiditate
             modi nesciunt eaque nam ex rerum consectetur eius natus sit fugit, ipsa beatae!'
            
                ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
$posts=
    [
        [
            'id'=>1,
            'slug'=>'judul-artikel-1',
        'title'=>'Judul Artikel 1',
        'author'=>'Imam Maarif',
        'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet doloribus 
        ex nobis voluptatibus vel possimus vitae expedita autem tempora saepe tempore
         asperiores maiores, quos, dolorum odit. Facilis suscipit consectetur tempora!'
        
        ],

        [
            'id'=>2,
            'slug'=>'judul-artikel-2',
            'title'=>'Judul Artikel 2',
            'author'=>'Admin',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Expedita fuga excepturi qui voluptas facilis odio enim cupiditate
             modi nesciunt eaque nam ex rerum consectetur eius natus sit fugit, ipsa beatae!'
            
                ]
        ];


    $post = Arr::first($posts, function ($post) use ($slug) {
         
        return $post['slug'] == $slug;
    });
    return view('post',['title'=>'Single Post', 'post'=>$post]);
});

Route::get('/contact', function () {
    return view('contact',['title'=>'Contact']);
});