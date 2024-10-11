$(document).ready(function () {
    const storeUrl = $('#postForm').attr('action');

    $('#postForm').on('submit', function (e) {
        e.preventDefault();
        $('#responseMessage').empty();
        $.ajax({
            url: storeUrl,
            method: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                // Display success message
                alert("Post created");
                $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
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
