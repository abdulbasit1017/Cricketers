document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;

    // Basic validation
    if (!email || !password) {
        alert('Please fill out all required fields.');
        return;
    }

    // For now, we'll just log the data to the console
    console.log('Login Data:', { email, password });
});
