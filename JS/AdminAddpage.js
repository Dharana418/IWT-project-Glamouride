function validation() {
    const firstname = document.getElementById('fname').value.trim();
    const lastname = document.getElementById('lname').value.trim();
    const role = document.getElementById('role').value;
    const email = document.getElementById('userEmail').value.trim();
    const password = document.getElementById('Password').value;
    const birthday = document.getElementById('birthday').value;
    const address = document.getElementById('Address').value.trim();
    const errors = document.querySelectorAll('.error-msg');
    errors.forEach(e => e.remove());
    function showError(input, message) {
        const error = document.createElement('div');
        error.className = 'error-msg';
        error.style.color = 'red';
        error.style.fontSize = '0.85em';
        error.innerText = message;
        input.parentNode.insertBefore(error, input.nextSibling);
    }
    if (firstname.length < 2) {
        showError(document.getElementById('fname'), "Firstname must be at least 2 letters");
        return false;
    }
    if (/\d/.test(firstname)) {
        showError(document.getElementById('fname'), "Firstname cannot contain numbers");
        return false;
    }
    if (lastname.length < 2) {
        showError(document.getElementById('lname'), "Lastname must be at least 2 letters");
        return false;
    }
    if (/\d/.test(lastname)) {
        showError(document.getElementById('lname'), "Lastname cannot contain numbers");
        return false;
    }
    if (!role) {
        showError(document.getElementById('role'), "Please select a role");
        return false;
    }
    if (!email.includes('@')) {
        showError(document.getElementById('userEmail'), "Enter a valid email containing '@'");
        return false;
    }
    if (password.length < 6) {
        showError(document.getElementById('Password'), "Password must be at least 6 characters");
        return false;
    }
    if (!birthday) {
        showError(document.getElementById('birthday'), "Please enter your birthday");
        return false;
    }
    const birthDate = new Date(birthday);
    const today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    const m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) age--;
    if (age < 16) {
        showError(document.getElementById('birthday'), "User must be at least 16 years old");
        return false;
    }
    if (address === "") {
        showError(document.getElementById('Address'), "Please enter your address");
        return false;
    }
    return true;
}