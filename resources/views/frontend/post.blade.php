@extends('frontend.layout')

@section('content')

<div class="flex justify-center">
    <div class="m-4 ">
        <div class=" flex justify-center text-4xl m-1">{!! $post->title !!}</div>   
        <div class="m-2">{!! $post->content !!}</div>
        <div class="flex space-x-5 text-lg m-1">
            @forelse ($post->tags as $tag)
            
            <a class="bg-green-300 rounded-lg" href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a>
            @empty
                <div>no tags</div>
            @endforelse
           </div>
        
        <div class="flex justify-center">
            @foreach ($post->medias as $media)
            <img class="  w-1/2 h-1/2" src ="{{ A17\Twill\Services\MediaLibrary\ImageService::getUrl($media->uuid)}}">
         @endforeach
        </div>
        <div class="m-4">created  {{ $post->created_at->diffForHumans() }} !</div>
        <hr>
    </div>
</div>
@endsection

