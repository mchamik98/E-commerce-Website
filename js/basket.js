function getBasket(){
    let basket;
    if(sessionStorage.basket === undefined || sessionStorage.basket === ""){
        basket = [];
    }
    else {
        basket = JSON.parse(sessionStorage.basket);
    }
    return basket;
}

//Displays basket in page.
function loadBasket(){
    let basket = getBasket();//Load or create basket
    
    //Build string with basket HTML
    let htmlStr = "";
    let prodIDs = [];
    for(let i=0; i<basket.length; ++i){
        htmlStr += "Product name: " + basket[i].name + "Product price: " +basket[i].price+ "<br>";
        prodIDs.push({id: basket[i].id, count: 1});//Add to product array
    }
    //Add hidden field to form that contains stringified version of product ids.
    htmlStr += "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>";
    htmlStr += "<input type='hidden' name='prodIDs' value='" + JSON.stringify(prodIDs) + "'>";
    //Add checkout and empty basket buttons
    htmlStr += "<a href='checkout.php'>Checkout</a>";
    htmlStr += "<br><button onclick='emptyBasket()'>Empty Basket</button>";
    
    //Display nubmer of products in basket
    document.getElementById("mySidenav").innerHTML = htmlStr;
}

function addToBasket(prodID){

	openNav();
	let basket = getBasket();
	let request = new XMLHttpRequest();

	request.onload = () => {

		if(request.status === 200){

			console.log(request.responseText);
			let products = JSON.parse(request.responseText);

			basket.push({"_id": products._id, "name": products.Title, "price": products.Price})

			sessionStorage.basket = JSON.stringify(basket);

			loadBasket();
		}
		else{
			alert("Error communicating with server: "+request.status);
		}
	}

	request.open("GET", "add_tobasket.php?prdid=" +prodID, true);
	request.send();
	
	
}

//Deletes all products from basket
function emptyBasket(){
    sessionStorage.clear();
    loadBasket();
}