<x-layout>


@include('posts.header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if ($posts->count())
    <x-posts-grid :posts="$posts"/>

    {{$posts->links()}}
        @else
        <p class="text-center">Thers are no posts yet. Check back later</p>
            
        @endif


</main>
</x-layout>




{{--@extends('layout')

@section('banner')
<h1>MY BLOG</h1>

@endsection

@section('content')

<?php //foreach ($posts as $post ):?>
<article>
    <h1><a href="/posts/{{$post->title}}">{!!$post->title; !!}</a></h1>
    <p> BY <a href='/authors/{{$post->author->username}}'>{{$post->author->username}}</a> IN <a href='/categories/{{$post->category->slug}}'>{{$post->category->name}}</a></p>
    <div>
        {{$post->excerpt}}
    </div>
    
</article>

<?php// endforeach; ?>

@endsection--}}






        
    
   <!-- <article>
        <h1><a href="/post/first-post"> First post</a></h1>
        <p>this is the first post of the blog this is the first post of the blog
            this is the first post of the blog this is the first post of the blog
            this is the first post of the blog this is the first post of the blog</p>
        
    </article>

    <article>
        <h1><a href="/post/second-post">Second post</a></h1>
        <p>this is the second post of the blog this is the second post of the blog 
            this is the second post of the blog this is thesecond post of the blog
            this is the second post of the blog this is the second post of the blog</p>
        
    </article>

    <article>
        <h1><a href="/post/third-post">Third post</a></h1>
        <p>this is the third post of the blog this is the third post of the blog 
            this is the third post of the blog this is the third post of the blog
            this is the third post of the blog this is the third post of the blog</p>
        
    </article>

    <article>
        <h1><a href="/post/fourth-post">Fourth post</a></h1>
        <p>this is the fourth post of the blog this is the fourth post of the blog 
            this is the fourth post of the blog this is the fourth post of the blog
            this is the fourth post of the blog this is the fourth post of the blog</p>
        
    </article>-->
    
    
