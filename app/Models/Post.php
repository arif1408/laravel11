<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{

    public static function all(){
        return [
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
    }




    public static function find($slug) :array
{
    // return Arr::first(static::all(), function ($post) use ($slug) {
         
    //     return $post['slug'] == $slug;
    // }); 


    $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug); 

    if (!$post) {
        abort(404);
    }
    return $post;
}
}
