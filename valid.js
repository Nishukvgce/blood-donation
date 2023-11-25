// valid.js

function authenticateUser() {
  // Get the entered username and password
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  // Perform your authentication logic here
  // For demonstration purposes, let's assume the username is "admin" and the password is "password"
  if (email === "admin" && password === "password") {
    alert("Authentication successful. Redirecting to the dashboard...");
    // Redirect to the index.html page
    window.location.href = "index.html";
  } else {
    alert("Authentication failed. Please check your credentials.");
  }
}
