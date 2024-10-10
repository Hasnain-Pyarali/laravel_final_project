document.addEventListener('DOMContentLoaded', function() {
    const postForm = document.getElementById('postForm');

    postForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission
        const title = document.getElementById('titre').value;
        const content = document.getElementById('content').value;
        // Send form data to Laravel via AJAX using fetch API
        fetch('/posts_processing', {
            method: 'POST',
            body: JSON.stringify({
                title: title,
                body: content
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Post created successfully!');
                // Optionally clear the form after successful submission
                postForm.reset();
            } else {
                alert('There was an error creating the post.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
