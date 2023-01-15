<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    // Home
    public function home() {
            return view('home');
    }
    
    // Listado de publicaciones
    public function blog() {
//        $posts = Post::get();
//        $post = Post::first();
//        $post = Post::find(26);  Find by id
//        dd($post);
        
        $posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]);
    }

    // Detalle de cada publicacion
    public function post(Post $post) {

        return view('post', ['post' => $post]);
    }

}
