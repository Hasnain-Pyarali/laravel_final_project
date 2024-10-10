<x-layout>
    @slot('title'){{$title}}@endslot
    <link rel="stylesheet" href="../css/style.css">
    <article class="py-8 max-w-screen-md post-container">
            <a href="/posts/{{$post->id}}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
            </a>
            <div class="text-based">
                <a href="#">{{ $post->author->name }} | {{$post->created_at}}</a>
            </div>
            <p class="my-4 font-light">{{$post->body}}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
        </article>
</x-layout>