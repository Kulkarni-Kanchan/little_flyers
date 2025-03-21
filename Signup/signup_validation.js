function validateForm() {
    var uname = document.getElementById("uname").value;
    var email = document.getElementById("email").value;
    var number = document.getElementById("number").value;
    var password = document.getElementById("password").value;

    // Name validation: Only text
    var nameRegex = /^[a-zA-Z\s]*$/;
    if (!nameRegex.test(uname)) {
        alert("Please enter a valid name (only text characters).");
        return false;
    }

    // Email validation: Full format
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Number validation: 10 digits
    if (number.length !== 10 || isNaN(number)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }

    // Password validation: At least 5 characters
    if (password.length < 5) {
        alert("Password must be at least 5 characters long.");
        return false;
    }

    return true;
}
