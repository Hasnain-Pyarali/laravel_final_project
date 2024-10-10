<x-layout>
    @slot('title'){{ $title }}@endslot

    <form id="postForm" action="{{ route('items.store') }}" method="POST">
        @csrf <!-- CSRF protection -->

        <div class="form-group">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="body" class="form-label">Content:</label>
            <textarea id="body" name="body" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="author_id" class="form-label">Author:</label>
            <select id="author_id" name="author_id" class="form-control">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Confirm</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src={{asset("js/posts.js")}}>
    </script>
</x-layout>
