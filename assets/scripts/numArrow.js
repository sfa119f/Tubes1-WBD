const price = document.getElementById("price");
const amount = document.getElementById("amount");

function inPrice(){
    var x = parseInt(price.value);
    price.value = x + 500;
}
function decPrice(){
    var x = parseInt(price.value);
    if(x-500 > 0){
        price.value = x - 500;
    }
}
function inAmount(){
    var x = parseInt(amount.value);
    amount.value = x + 1;
}
function decAmount(start){
    var x = parseInt(amount.value);
    if(x-1 >= start){
    amount.value = x - 1;
    }
}