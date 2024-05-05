// Get references to form elements
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");
const loginButton = document.getElementById("loginButton");

// Attach event listener to the login button
loginButton.addEventListener("click", function() {
    const username = usernameInput.value;
    const password = passwordInput.value;

    // Create a new XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Configure the request
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define the callback function
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = xhr.responseText;
            // Handle the response, e.g., display a message to the user
            console.log(response);
        }
    };

    // Send the request with user data
    xhr.send(`username=${username}&password=${password}`);
});
