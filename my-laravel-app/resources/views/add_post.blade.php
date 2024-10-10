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

    <div id="responseMessage" style="margin-top:20px;"></div> <!-- Display success/error message -->

    <!-- jQuery (required for AJAX) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#postForm').on('submit', function (e) {
                e.preventDefault(); // Prevent default form submission

                // Clear any previous messages
                $('#responseMessage').empty();

                // Perform AJAX request
                $.ajax({
                    url: "{{ route('items.store') }}",
                    method: 'POST',
                    data: $(this).serialize(), // Serialize form data
                    success: function (response) {
                        // Display success message
                        $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                        // Optionally clear the form after successful submission
                        $('#postForm')[0].reset();
                    },
                    error: function (xhr) {
                        // Display validation errors
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            let errorMessage = '<div class="alert alert-danger"><ul>';
                            $.each(errors, function (key, value) {
                                errorMessage += '<li>' + value[0] + '</li>';
                            });
                            errorMessage += '</ul></div>';
                            $('#responseMessage').html(errorMessage);
                        }
                    }
                });
            });
        });
    </script>
</x-layout>
