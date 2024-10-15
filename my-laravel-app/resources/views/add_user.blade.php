<x-layout>
    @slot('title'){{$title}}@endslot
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">User Information</h4>
        </div>
        <div class="card-body">
            <form id="postForm" action="{{ route('bloggers.store') }}" method="POST">
                @csrf <!-- CSRF protection -->
                <div class="form-group">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

    <!-- <div id="responseMessage"></div> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/user.js') }}"></script>
</x-layout>
