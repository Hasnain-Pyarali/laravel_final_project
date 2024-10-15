<x-layout>
    @slot('title'){{ $title }}@endslot
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Create a New Post</h4>
            </div>
            <div class="card-body">
                <form id="postForm" action="{{ route('items.store') }}" method="POST">
                    @csrf <!-- CSRF protection -->
                    <div class="form-group">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter the post title" required>
                    </div>

                    <div class="form-group">
                        <label for="body" class="form-label">Content</label>
                        <textarea class="form-control" id="body" name="body" rows="5" placeholder="Enter the post content" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="author_id" class="form-label">Author</label>
                        <select id="author_id" name="author_id" class="form-control">
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Post</button>
                </form>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src={{asset("js/posts.js")}}>
    </script>
</x-layout>
