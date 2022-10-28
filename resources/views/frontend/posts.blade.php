@extends('frontend.layout')

@section('content')

    @forelse ($posts as $post)

    <div class="m-4 ">
        <div class="text-4xl m-1"><a class="text-blue-800" href="posts/{{ $post->slug }}">{!! $post->title !!}</a></div>
        <div class="m-1 text-xl"><a class="hover:text-blue-400" href="posts/{{ $post->slug }}">{!! $post->excerpt !!}</a></div>
        <div class="flex space-x-5 text-lg m-1">
            
         @forelse ($post->tags as $tag)
         <a class="bg-green-300 rounded-lg" href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a>
         @empty
             <div>no tags</div>
         @endforelse
        </div>
        <div class="m-1">created  {{ $post->created_at->diffForhumans() }}</div>
        
        <hr>
    </div>
        
    @empty
        <div class="flex justify-center mt-4 text-4xl text-red-400">No posts to show !</div>
    @endforelse

    @endsection
