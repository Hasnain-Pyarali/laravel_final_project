<x-layout>
    @slot('title'){{$title}}@endslot
    <div>Welcome to my blog </div>
    @foreach($posts as $post)
        <article class="py-8 max-w-screen-md">
            <a href="/posts/{{$post->id}}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
            </a>
            <div class="text-based text-gray-500">
                <a href="#">{{ $post->author->name }} | {{$post->created_at}}</a>
            </div>
            <p class="my-4 font-light">{{ Str::limit($post->body,50) }}</p>
            <a href="/posts/{{$post->id}}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>