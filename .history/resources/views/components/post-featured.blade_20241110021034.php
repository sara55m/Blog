@props(['post'])
<article
                class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="/storage/{{$post->thumbnail}}" alt="Blog Post illustration" class="rounded-xl">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                {{-- <a href="/categories/{{$post->category->slug}}"
                                   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   style="font-size: 10px">{{$post->category->name}}</a> --}}
                                   <x-category-button :category="$post->category" />
                            </div>

                            <div class="space-x-2">
                                {{--passing tags attribute to the component--}}
                                <x-tag-button :tags="$post->tags"/>
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">
                                    <a href="/posts/{{$post->id}}">
                                    {{$post->title}}
                                    </a>
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$post->created_at->diffForHumans()}}</time>
                                    </span>
                            </div>
                        </header>

                        <div class="text-sm mt-2 space-y-4">
                            <p>
                                {!!$post->excerpt!!}

                            </p>

                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="/storage/{{$post->author->image}}" alt="Author Image" class="rounded-xl" height="150px" width="120px">
                                <div class="ml-3">
                                    <h5 class="font-bold"><a href="/posts/?author={{$post->author->username}}">{{$post->author->username}}</a></h5>
                                    @php
                                    $isFollowing = auth()->user() && auth()->user()->following->contains($post->author->id);
                                    $isauthor=auth()->user() && auth()->user()->id==$post->author->id;
                                @endphp

                                <div>
                                    <span>{{ $post->author->name }}</span>
                                    @if(auth()->check())
                                    @if(!$isauthor)
                                    @if($isFollowing)
                                        <span>Following</span>
                                    @else
                                        <form action="{{ route('Follow', ['author' =>$post->author->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-sm">Follow</button>
                                        </form>
                                    @endif
                                    @endif
                                    @else
        <!-- Show a message or link to login if the user is not authenticated -->
        <span><a href="/login">Log in to follow</a></span>
    @endif

                                </div>
                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <a href="/posts/{{$post->id}}"
                                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>
