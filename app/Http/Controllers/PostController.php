<?php

namespace App\Http\Controllers;

use A17\Twill\Models\Tag as ModelsTag;
use App\Models\Post;
use App\Repositories\PostRepository;


class PostController extends Controller
{
    public function index()

    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        return view('frontend.posts',['posts'=>$posts]) ;
    }

    public function show($slug)

    {
      $post = app(PostRepository::class)->forSlugPreview($slug);

      return view('frontend.post',['post'=>$post]);
    }

    
    public function showTaggedPosts($slug)

    {
       
      
       $posts = Post::withTag( $slug)->get();

      return view('frontend.tags',['posts'=>$posts]);
    }
}
