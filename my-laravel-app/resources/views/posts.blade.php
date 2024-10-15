<x-layout>
    @slot('title'){{$title}}@endslot
    <form action="{{ url('/posts') }}" method="GET">
        <button type="button" id="refresh-search-button" onclick="refreshSearch()"  class="btn btn-primary btn-sm">Refresh</button>
        <input type="search" id="search" name="search" placeholder="Search by title" class="form-control">
    </form>
    @foreach($posts as $post)
        <div class="card shadow-sm" style="margin-top: 5px; border-radius: 10px">
            <div class="card-body">
                <h1 class="card-title font-weight-bold">{{ $post->title }}</h1>
                <h6 class="card-subtitle mb-3 text-muted"><i class="fas fa-user"></i>Posted by {{ $post->author->name }} - {{$post->created_at->diffForHumans()}}</h6>
                <p class="card-text" style="line-height: 1.6;">{{ Str::limit($post->body,50) }}</p>
                <a href="/posts/{{$post->id}}" class="btn btn-primary btn-sm">Read more &gt;&gt;</a>
            </div>
        </div>
    @endforeach

    <script src="js/posts.js"></script>
    {{ $posts->links() }}
</x-layout>
