document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from actually submitting

        // Display the success message
        alert('Message sent successfully!');
        
        // Optionally, you can reset the form fields here if needed
        form.reset();
    });
});
