<?php

namespace App\Http\Controllers;

use A17\Twill\Models\Tag as ModelsTag;
use App\Models\Post;

class PostController extends Controller
{
    public function index()

    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        return view('frontend.posts',['posts'=>$posts]) ;
    }

    public function show($id)

    {
      $post =   Post::findOrFail($id);

      return view('frontend.post',['post'=>$post]);
    }

    public function showTaggedPosts($id)

    {
       $tag = ModelsTag::find($id);
       $tagName = $tag->slug ;
       $posts = Post::withTag( $tagName)->get();

      return view('frontend.tags',['posts'=>$posts]);
    }
}
