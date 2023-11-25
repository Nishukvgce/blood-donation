document.addEventListener('DOMContentLoaded', function () {
    const donorForm = document.getElementById('donorForm');
    const donorList = document.getElementById('donorList');

    donorForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const bloodType = document.getElementById('bloodType').value;
        const contact = document.getElementById('contact').value;
       

        // Assuming you have a server-side endpoint to handle donor registration
        // This is a simplified example, and in a real-world scenario, you would make an AJAX request to the server.
        const newDonor = document.createElement('li');
        newDonor.textContent = `${name} - Blood Type: ${bloodType} - Contact: ${contact}`;
        donorList.appendChild(newDonor);

        // Clear the form after submission
        donorForm.reset();
    });
});
