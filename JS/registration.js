function validation() {
    var firstname = document.getElementById('firstname').value.trim();
    var lastname = document.getElementById('lastname').value.trim();
    var role = document.getElementById('role').value;
    var email = document.getElementById('email').value.trim();
    var birthday = document.getElementById('birthday').value;
    var address=document.getElementById('Address').value;

    if (firstname.length < 2) {
        document.getElementById('firstnamev').innerHTML = "Enter at least 2 letters";
        return false;
    }
    if (/\d/.test(firstname)) {
        document.getElementById('firstnamev').innerHTML = "Name cannot contain numbers";
        return false;
    }
    if (lastname.length < 2) {
        document.getElementById('lastnamev').innerHTML = "Enter at least 2 letters";
        return false;
    }
    if (/\d/.test(lastname)) {
        document.getElementById('lastnamev').innerHTML = "Name cannot contain numbers";
        return false;
    }
    if (role === "none") {
        document.getElementById('rolev').innerHTML = "Please select a role";
        return false;
    }
    if (!email.includes('@')) {
        document.getElementById('emailv').innerHTML = "Enter a valid email containing '@'";
        return false;
    }
    const birthDate = new Date(birthday);
    const today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    const m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    if (age < 16) {
        document.getElementById('birthdayv').innerHTML = "You must be at least 16 years old";
        return false;
    }
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Registered Successfully',
      showConfirmButton: true,
      width: '400px'
    });
    return true;
}

