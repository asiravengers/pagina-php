document.getElementById('loginButton').addEventListener('click', function() {
    toggleForms('login');
});

document.getElementById('registerLink').addEventListener('click', function(event) {
    event.preventDefault();
    toggleForms('register');
});

document.getElementById('loginLink').addEventListener('click', function(event) {
    event.preventDefault();
    toggleForms('login');
});

document.getElementById('enterButton').addEventListener('click', function() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    if (username && password) {
        alert('Iniciando sesión...');
    } else {
        alert('Por favor, completa todos los campos.');
    }
});

document.getElementById('registerButton').addEventListener('click', function() {
    const regUsername = document.getElementById('regUsername').value;
    const regEmail = document.getElementById('regEmail').value;
    const regPassword = document.getElementById('regPassword').value;
    if (regUsername && regEmail && regPassword) {
        alert('Registrando cuenta...');
    } else {
        alert('Por favor, completa todos los campos.');
    }
});

function toggleForms(formType) {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const formTitle = document.getElementById('formTitle');
    const loginButton = document.getElementById('loginButton');

    if (formType === 'login') {
        loginForm.style.display = 'block';
        registerForm.style.display = 'none';
        formTitle.textContent = 'Iniciar Sesión';
        formTitle.style.display = 'block';
        loginButton.style.display = 'none';
    } else {
        loginForm.style.display = 'none';
        registerForm.style.display = 'block';
        formTitle.textContent = 'Registrarse';
        formTitle.style.display = 'block';
        loginButton.style.display = 'none';
    }
}
