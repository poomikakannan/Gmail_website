"use strict";

function validateForm() {
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirm-password').value;

    let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#\$%\^&\*\(\)\_\+\-=\[\]\{\};:"\\|,.<>\/?]).{8,}$/;

    if (!passwordRegex.test(password)) {
        alert("Password must contain at least one uppercase letter, one lowercase letter, one number, one special character, and be at least 8 characters long.");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true; 
}

document.getElementById('password').addEventListener('focus', function () {
    document.getElementById('password-tooltip').style.visibility = 'visible';
});

document.getElementById('password').addEventListener('blur', function () {
    document.getElementById('password-tooltip').style.visibility = 'hidden';
});

document.querySelector('form').addEventListener('submit', function (e) {
    if (!validateForm()) {
        e.preventDefault(); 
    }
});