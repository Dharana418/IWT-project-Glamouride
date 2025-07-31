document.addEventListener('DOMContentLoaded', () => {
    const passwordInput = document.getElementById('password');
    const icon = document.getElementById('pass-icon');
    const form = document.getElementById('login-form');
    const emailInput = document.getElementById('email');
    const errorMessage = document.getElementById('error-message');

    // Toggle password visibility
    icon.addEventListener('click', () => {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        icon.src = isPassword
            ? '../images/show-password.png'
            : '../images/hide_8088557.png';
    });

    // Form validation
    form.addEventListener('submit', (e) => {
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        if (!email || !password) {
            e.preventDefault();
            errorMessage.style.display = 'block';
        } else {
            errorMessage.style.display = 'none';
            // Fake login simulation
            alert("Logged in successfully! (This is a demo)");
        }
    });
});
