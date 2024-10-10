<x-layout>
    @slot('title'){{ $title }}@endslot
    <link rel="stylesheet" href="../css/style.css">

    <article class="py-8 max-w-screen-md post-container">
        <a href="/posts/{{$post->id}}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
        </a>
        <div class="text-based">
            <a href="#">{{ $post->author->name }} | {{ $post->created_at->diffForHumans() }}</a>
        </div>
        <p class="my-4 font-light">{{ $post->body }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>

    <h2>Commentaires :</h2>
    <div id="commentsContainer">
        @foreach ($comments as $comment)
            @if ($comment->post_id == $post->id)
                <div class="py-8 max-w-screen-md comment-container">
                    <div>
                        {{ $comment->body }}
                    </div>
                    <div>
                        {{ $comment->created_at->diffForHumans() }}
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <form id="commentForm" action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="text" name="body" placeholder="Votre Commentaire" class="form-control" id="body" required>
        <input type="hidden" name="post_id" value="{{ $post->id }}"> <!-- Correctly using the post ID -->
        <button type="submit" class="btn btn-primary">Commenter</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/comments.js') }}"></script>
</x-layout>
