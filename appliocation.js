document.getElementById('applicationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const applicationData = document.getElementById('applicationData').value;

    // Basic validation
    if (!applicationData) {
        alert('Please provide application data.');
        return;
    }

    // For now, we'll just log the data to the console
    console.log('Application Data:', { applicationData });
});
