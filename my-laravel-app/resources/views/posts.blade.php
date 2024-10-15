<x-layout>
    @slot('title'){{$title}}@endslot
    @foreach($posts as $post)
        <div class="card shadow-sm" style="margin-top: 5px; border-raiuds: 10px">
            <div class="card-body">
                <h1 class="card-title font-weight-bold">{{ $post->title }}</h1>
                    
                <h6 class="card-subtitle mb-3 text-muted"><i class="fas fa-user"></i>Posted by {{ $post->author->name }} - {{$post->created_at->diffForHumans()}}</h6>
                    
                <p class="card-text" style="line-height: 1.6;">{{ Str::limit($post->body,50) }}</p>
                    
                <a href="/posts/{{$post->id}}" class="btn btn-primary btn-sm">Read more &gt;&gt;</a>
            </div>
        </div>
    @endforeach
</x-layout>