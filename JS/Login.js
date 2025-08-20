document.addEventListener('DOMContentLoaded', () => {
    const passwordInput = document.getElementById('password');
    const icon = document.getElementById('pass-icon');
    const form = document.getElementById('login-form');
    const emailInput = document.getElementById('email');
    const errorMessage = document.getElementById('error-message');

    icon.addEventListener('click', () => {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        icon.src = isPassword
            ? '../images/show-password.png'
            : '../images/hide_8088557.png';
    });

    form.addEventListener('submit', (e) => {
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        if (!email || !password) {
            e.preventDefault();
            errorMessage.style.display = 'block';
        } else {
            e.preventDefault();

            errorMessage.style.display = 'none';
            
            Swal.fire({
                icon: 'success',
                title: 'Login Successful!',
                text: 'Welcome back!',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '../Html/AdminDashboard.html';
            });
        }
    });
});
