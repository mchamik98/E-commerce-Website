<?php
    include ('common.php');
    outputHeader("Welcome at Middlesex Electronics!");
    outputBannerNavigation("Home");

?>

    <!-- Register form -->  
    <div class="registerContainer">
        <form name="registerForm">
          <div class="col-12">
				<div class="row">
					<div class="col-6 form-group lead">
    					<label for="firstNameInput">First Name</label>
    					<input type="text" class="form-control" id="InputFirstName" name="firstName" placeholder="First Name" required>
					</div>

					<div class="col-6 form-group lead">
    					<label for="lastNameInput">Last Name</label>
    					<input type="text" class="form-control" id= "InputLastName" name="lastName" placeholder="Last Name" required>
					</div>

  					<div class="col-6 form-group lead">
    					<label for="emailInput">E-mail Address</label>
    					<input type="email" class="form-control" id="InputEmail" name="email" placeholder="E-mail" required>
					</div>

					<div class="col-6 form-group lead">
    					<label for="phone">Phone Number</label>
    					<input type="text" class="form-control" id="InputPhone" name="phone" placeholder="Phone Number" required>
					</div>
				
  					<div class="col-6 form-group lead">
    					<label for="pwdInput">Password</label>
    					<input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password" required>
					</div>

					<div class="col-6 form-group lead">
    					<label for="pwdRepeat">Password</label>
    					<input type="password" class="form-control" id="InputPasswordRepeat" name="passwordRepeat" placeholder="Repeat Password" required>
					</div>

					<div class="col-12 form-group lead">
    					<label for="address">Street Address</label>
    					<textarea type="text" class="form-control" id="InputAddress" name="address" placeholder="Address" required></textarea>
					</div>

					<div class="col-7 form-group lead">
    					<label for="city">City</label>
    					<input type="text" class="form-control" id="InputCity" name="city" placeholder="City" required>
					</div>

					<div class="col-5 form-group lead">
    					<label for="postCode">Post Code</label>
    					<input type="text" class="form-control" id="InputPostCode" name="postCode" placeholder="Post Code" required>
					</div>


					<div class="col-12 text-right registerBtn">
						<button type="submit" onclick="register()" class="btn btn-info btn-lg">Register</button>
					</div>
			</div> 
        </form>
    </div>



    <script>
function register(){
	//Create request object 
	let request = new XMLHttpRequest();

	//Create event handler that specifies what should happen when server responds
	request.onload = () => {
		//Check HTTP status code
		if(request.status === 200){
			//Get data from server
			let responseData = request.responseText;

			//Add data to page
			let x = responseData;
			alert(x);
		}
		else
			alert("Error communicating with server: " + request.status);
	};

	//Set up request with HTTP method and URL 
	request.open("POST", "register.php");
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	//Extract registration data
	let name = document.getElementById("InputFirstName").value;
	let surname = document.getElementById("InputLastName").value;
	let email = document.getElementById("InputEmail").value;
	let phone = document.getElementById("InputPhone").value;
	let password = document.getElementById("InputPassword").value;
	let address = document.getElementById("InputAddress").value;
	let city = document.getElementById("InputCity").value;
	let postCode = document.getElementById("InputPostCode").value;

	
	
	
	//Send request
	request.send("_name=" + name + "&_surname=" + surname + "&_email=" + email + "&_phone=" + phone + "&_password=" + password + "&_address=" + address + "&_city=" + city + "&_postCode=" + postCode);
}
</script>
    
<?php
        outputFooter();
?>
