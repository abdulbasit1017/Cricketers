document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Basic validation
    if (!name || !email || !password) {
        alert('Please fill out all required fields.');
        return;
    }

    // For now, we'll just log the data to the console
    console.log('Registration Data:', { name, email, password });
});
