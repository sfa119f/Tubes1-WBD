var tooltip = document.querySelectorAll(".card .tooltip")

window.onmousemove = function (e) {
    var x = (e.clientX - 25) + "px";
    var y = (e.clientY - 20) + "px";
    for (var i=0; i<tooltip.length; i++) {
        tooltip[i].style.top = y;
        tooltip[i].style.left = x;
    }
}