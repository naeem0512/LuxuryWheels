$(document).ready(function() {
    // Function to hide success message after 3 seconds (3000 milliseconds)
    function hideSuccessMessage() {
        $('.success-message').fadeOut('slow'); // Fade out the success message
    }

    // Hide the success message after 3 seconds automatically
    setTimeout(hideSuccessMessage, 3000); // 3000 milliseconds = 3 seconds
});