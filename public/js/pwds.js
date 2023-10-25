const MostrarPwds = document.getElementById('mostrapwds');
const pwd1 = document.getElementById('password');
const pwd2 = document.getElementById('password_confirmation');

MostrarPwds.addEventListener('change', () => {
    if (MostrarPwds.checked) {
        pwd1.type = 'text';
        pwd2.type = 'text';
    } else {
        pwd1.type = 'password';
        pwd2.type = 'password';
    }
});