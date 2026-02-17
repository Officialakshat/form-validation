document.getElementById("my-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    let isValid = true;
    
    // Your validation code...
    
    if (isValid) {
        // Create FormData object
        let formData = new FormData(document.getElementById("my-form"));
        
        // For debugging: log the data being sent
        for (let pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }
        
        fetch('data.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log("Server response:", data);
            alert("Form submitted successfully!");
            document.getElementById("my-form").reset();
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
});