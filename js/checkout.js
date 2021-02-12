function loadOrderDetails(){
    try{
        let basket = JSON.parse(sessionStorage.basket);
        let orderTotal = 0;


        for(let i=0; i<basket.length; i++){
            orderTotal += parseInt(basket[i].price);
        }
        document.getElementById('prdCount').innerHTML = "Products:" +basket.length;
        document.getElementById('prdTotal').innerHTML = "Total: $" +orderTotal;
    }
    catch{
        document.getElementById("basket-confirm").innerHTML = "Basket is empty";
    }
}


function completeOrder(){

    let date = new Date();
    let basket = JSON.parse(sessionStorage.basket);
    const prdTotal = basket.length;
    let orderTotal = document.getElementById('prdTotal').innerHTML;
    orderTotal = orderTotal.substring(8);

    productList = '['
    for(let i = 0; i<basket.length; i++){
        productList+= basket[i]._id.$oid + ",";
    }
    date = (date.getHours()+ ":" +date.getMinutes() + " " + date.getDate()+ "/" + (date.getMonth()+1)+ "/" + date.getFullYear());
    productList = productList.slice(0, -1);
    productList += "]";

    let request = new XMLHttpRequest();

    request.onload = () => {
        if(request.status === 200){
            console.log(request.responseText);

            if(request.responseText == "Thank you, your order has been placed."){
                document.getElementById("checkout-cont").innerHTML = '<div id="checkout-confirm">Thank you, your order has been placed</div>'
                sessionStorage.clear();
            }
        }
        else{
            alert("Error communicating with server: "+request.status);
        }
    }

    request.open("POST", "../new_order.php", true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.send("date=" +date+ "&basket=" +productList + "&total=" +orderTotal +"&prdtotal=" +prdTotal);



}