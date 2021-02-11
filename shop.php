<?php
    include ('common.php');
    outputHeader("Welcome at Middlesex Electronics!");
    outputBannerNavigation("Home");

    require __DIR__ . '/vendor/autoload.php';
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->ecommerce;
    
    //Find all products
    $products = $db->Products->find();

 ?>

<div class = "shop-containerr">

<div class="sort-cont">
        <button onclick="low_high()" type = "button" class = "btn btn-default btn-sm">Price Low-High</button>
		<button onclick="high_low()" type = "button" class = "btn btn-default btn-sm">Price High-Low</button>
		<button onclick="a_z()" type = "button" class = "btn btn-default btn-sm">Products A-Z</button>
		<button onclick="z_a()" type = "button" class = "btn btn-default btn-sm">Products Z-A</button>	
</div>



<div class="search-cont">
	<div class="search-box">
		<input type="text" class="search" id="search-p" placeholder="Search for products...">
		<button onclick="search_prod()" type="button" class="search-btn">
			<i class="fa fa-search"></i>
		</button>
	</div>
</div>	

        <table id="table"></table>
		<div id="basketDiv"></div>
</div>

<script>
    window.onload = load_prod;
	window.onload = loadBasket;

	let totalPrice = 0;

    function output_products(request){
	document.getElementById("table").innerHTML="";
	let productsJSONarray = request.responseText;	
	let productsArray = JSON.parse(productsJSONarray);	
	let arr = productsArray.length/3;
	let no_of_rows = Math.ceil(arr);
	let counter = 0;
	let t = document.getElementById("table");
	for (let i = 0 ; i < no_of_rows; i++){		
		let newRow = t.insertRow(t.length);// create a new row
		for (let x = 0 ; x < 5; x++){

			//delete
			let x1 = "product_" + counter;
			let x2 = "product_price" + counter;
			//
			let cell = newRow.insertCell();
			//
			cell.setAttribute("id", x1);
			//
			cell.innerHTML ='<div class="small-containerr">'+
                                        '<div class="col-4">'+
                                        '<div class="shop-product-container">'+
                                        '<div class="shop-product-box">'+
                                        '<div class="shop-product-img">'+
                                        '<button  onclick="add_to_basket('+ counter + ')" class="add-cart">'+
                                        '<i class="fas fa-shopping-cart"></i>'+
                                        '</button>'+
										'<img src='+ productsArray[counter].Image +'>' +
                                        '</div>'+
                                        '</div>'+
                                        '<div class="shop-product-details">'+
                                        '<h4 id="name" class="Newp-name">' + productsArray[counter].Title +'</h4>'+
                                        '<h4 id="price" class="p-price">' + productsArray[counter].Price + '£</h4>'+
                                        '</div>'+
                                        '</div>'+
                                        '</div>'+
                                        '</div>';
			counter++;
			if(counter >= productsArray.length){						
				x = 5;
				i = no_of_rows;
			}//end if				
		}//end of cell
	}//end of no_of_rows	
}

    function load_prod(){
	let request = new XMLHttpRequest();
	request.onload = function(){
		if(request.status === 200){	
                output_products(request);
		}else
			alert("Error communicating with server: " + request.status);
	};
	request.open("POST", "load_products.php");
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	let no = 0;
	request.send("_condition=" + no);
        }

    function low_high(){
	let request = new XMLHttpRequest();
	request.onload = function(){
		if(request.status === 200){
			output_products(request);		
		}else
			alert("Error communicating with server: " + request.status);
	};

	request.open("POST", "load_products.php");
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	let no = 1;
	request.send("_condition=" + no);
}

function high_low(){
	let request = new XMLHttpRequest();
	request.onload = function(){
		
		if(request.status === 200){
                        output_products(request);		
		}else
			alert("Error communicating with server: " + request.status);
	};

	request.open("POST", "load_products.php");
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	let no = -1;
	request.send("_condition=" + no);
}

function a_z(){
	let request = new XMLHttpRequest();
	request.onload = function(){
		
		if(request.status === 200){
                        output_products(request);		
		}else
			alert("Error communicating with server: " + request.status);
	};

	request.open("POST", "load_products.php");
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	let no = 2;
	request.send("_condition=" + no);
}

function z_a(){
	let request = new XMLHttpRequest();
	request.onload = function(){
		
		if(request.status === 200){
                        output_products(request);		
		}else
			alert("Error communicating with server: " + request.status);
	};

	request.open("POST", "load_products.php");
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	let no = -2;
	request.send("_condition=" + no);
}

function search_prod(){
	let request = new XMLHttpRequest();
	request.onload = function(){
		if(request.status === 200){	
                output_products(request);
		}else
			alert("Error communicating with server: " + request.status);
	};
	request.open("POST", "load_products.php");
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	let no = 3;
	let search = document.getElementById("search-p").value;
	request.send("_condition=" + no + "&_search=" +search);
}

 
</script>




<?php

        outputFooter("Home");
?>