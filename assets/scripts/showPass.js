const password = document.getElementById('password');
const show = document.getElementById('show');
const hide = document.getElementById('hide');

function showPass(){
    password.type = 'text';
    show.style.display = 'block';
    show.style.color = '#293241';
    hide.style.display = 'none';
}

function hidePass(){
    password.type = 'password';
    hide.style.display = 'block';
    show.style.display = 'none';
}