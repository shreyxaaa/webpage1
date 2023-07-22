// Get the reference to the "Sign In" button
const signInButton = document.querySelector('button[type="submit"]');

// Add a click event listener to the button
signInButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the form submission (for demonstration purposes)

    // Replace this alert with your desired action, e.g., form submission using AJAX
    alert('Sign In button clicked!'); 
});
