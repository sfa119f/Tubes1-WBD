function usernameCheck(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("usernameWarn").innerHTML = this.responseText;
    }
    };
    xmlhttp.open("GET", "assets/php/usercheck.php?q=" + str, true);
    xmlhttp.send();
}
function emailCheck(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("emailWarn").innerHTML = this.responseText;
    }
    };
    xmlhttp.open("GET", "assets/php/emailcheck.php?q=" + str, true);
    xmlhttp.send();
}
function passCheck(str) {
    var regexp = /^[a-zA-Z0-9-_]+$/;
    if (str.length == 0){
        document.getElementById("passWarn").innerHTML = "Required";
        document.getElementById("password").style.border= "1px solid red";
    }
    else if (str.search(regexp) == -1){
        document.getElementById("passWarn").innerHTML = "Password can only contain alphanumeric characters and underscores";
        document.getElementById("password").style.border= "1px solid red";
    }
    else{
        document.getElementById("passWarn").innerHTML = "";
        document.getElementById("password").style.border= "";
    }
}
function cPassCheck(confirm){
    str = document.getElementById("password").value;
    if (confirm.length == 0){
        document.getElementById("cPassWarn").innerHTML = "Required";
        document.getElementById("confirmPassword").style.border= "1px solid red";
    }
    else if (str !== confirm){
        document.getElementById("cPassWarn").innerHTML = "Password and Confirm Password must same";
        document.getElementById("confirmPassword").style.border= "1px solid red";
    }
    else{
        document.getElementById("cPassWarn").innerHTML = "";
        document.getElementById("confirmPassword").style.border= "";
    }
}