$(document).ready(function () {
    const storeUrl = $('#postForm').attr('action');
    $('#postForm').on('submit', function (e) {
        e.preventDefault();
        $('#responseMessage').empty(); // Clear any previous messages

        $.ajax({
            url: storeUrl,
            method: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                // Display success message
                // alert("User created");
                $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                $('#postForm')[0].reset(); // Reset the form after successful submission
            },
            error: function (xhr) {
                // Check for validation errors (422 status)
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function (key, value) {
                        errorMessage += '<li>' + value[0] + '</li>';
                    });
                    errorMessage += '</ul></div>';
                    $('#responseMessage').html(errorMessage);
                } else {
                    // Generic error handling for other status codes
                    $('#responseMessage').html('<div class="alert alert-danger">' + xhr.responseText + '</div>');
                }

                // Log the error details in the console for debugging
                console.error("Error details:", xhr.responseText);
            }
        });
    });
});
