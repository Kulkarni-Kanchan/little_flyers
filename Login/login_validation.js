function validateForm() {
    var email = document.getElementById("uname").value;
    var password = document.getElementById("password").value;

    // Email validation: Check if the email field is empty
    if (email.trim() === "") {
        alert("Please enter your email.");
        return false;
    }

    // Password validation: Check if the password field is empty
    if (password.trim() === "") {
        alert("Please enter your password.");
        return false;
    }

    return true;
}
