document.addEventListener("DOMContentLoaded", function() {
    // Example of a simple validation
    document.querySelector("form").addEventListener("submit", function(event) {
        const requiredFields = document.querySelectorAll("input[required]");
        let allFilled = true;

        requiredFields.forEach(function(field) {
            if (!field.value) {
                allFilled = false;
                field.classList.add("is-invalid");
            } else {
                field.classList.remove("is-invalid");
            }
        });

        if (!allFilled) {
            event.preventDefault();
            alert("Please fill in all required fields.");hhhhh
        }
    });
});
