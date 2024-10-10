<x-layout>
    @slot('title'){{$title}}@endslot

    <form id="postForm" action="{{ route('bloggers.store') }}" method="POST">
        @csrf <!-- CSRF protection -->
        <div class="form-group">
            <label for="name" class="form-label">Enter your name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Enter your email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Confirm</button>
        </div>
    </form>
    <!-- <div id="responseMessage"></div> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/user.js') }}"></script>
</x-layout>
