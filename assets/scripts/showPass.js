const password = document.getElementById("password");
const show = document.getElementById("show");
const hide = document.getElementById("hide");
const passw = document.getElementById("passw");
const showPassw = document.getElementById("showPassw");
const hidePassw = document.getElementById("hidePassw");
const cPassword = document.getElementById("confirmPassword");
const cShow = document.getElementById("showCPass");
const cHide = document.getElementById("hideCPass");

function showPass(type){
    if(type === 1){
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
    else if(type === 2){
        if(passw.type === "password"){
            passw.type = "text";
            showPassw.style.display = "";
            showPassw.style.color = "black";
            hidePassw.style.display = "none";
        }
        else{
            passw.type = "password";
            hidePassw.style.display = "";
            showPassw.style.display = "none";
        }
    }
    else if(type === 3){
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
}