const password = document.getElementById("password");
const show = document.getElementById("show");
const hide = document.getElementById("hide");
const cPassword = document.getElementById("confirmPassword");
const cShow = document.getElementById("showCPass");
const cHide = document.getElementById("hideCPass");

function showPass(){
    if(password.type === "password"){
        password.type = "text";
        show.style.display = "";
        show.style.color = "black";
        hide.style.display = "none";
    }
    else{
        password.type = "password";
        hide.style.display = "";
        show.style.display = "none";
    }
}
function showCPass(){
    if(cPassword.type === "password"){
        cPassword.type = "text";
        cShow.style.display = "";
        cShow.style.color = "black";
        cHide.style.display = "none";
    }
    else{
        cPassword.type = "password";
        cHide.style.display = "";
        cShow.style.display = "none";
    }
}