$(document).ready(function () {
    const commentForm = $('#commentForm');

    commentForm.on('submit', function (e) {
        e.preventDefault();
        $('#responseMessage').empty(); // Clear previous messages

        $.ajax({
            url: commentForm.attr('action'), // Get the action URL from the form
            method: 'POST',
            data: commentForm.serialize(),
            success: function (response) {
                // Display success message
                alert("Comment added");
                $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                commentForm[0].reset(); // Reset the form
                // Append the new comment to the comments container
                $('#commentsContainer').append('<div class="py-8 max-w-screen-md comment-container"><div>' + response.comment.body + '</div><div>' + response.comment.created_at + '</div></div>');
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
