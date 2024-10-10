<?php
use App\Http\Controllers\PostController;
Route::resource('items', PostController::class);
?>
<x-layout>
    @slot('title'){{ $title }}@endslot

    <!-- Ensure POST method is used -->
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
            <button type="submit" class="btn btn-primary">Confirm</button>
        </div>
    </form>
</x-layout>
