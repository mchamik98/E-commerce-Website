<?php
    include ('../common.php');
    outputHeader("CMS Login"); 
	outputBannerNavigation("Home"); 
?>


<!--- cms login --->
<div class="cms-login">
	<div class="cms-container">
		<h1> Enter admin details to access CMS! </h1>

		<div class="form-group">
			<label for="email">Admin:</label>
			<input type="text" class="form-control" id="email">
		</div>

		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd">
		</div>

		<p style="color:green;" id="OK"></p>
		<p style="color:red;" id="WRONG"></p>

		<div class="input-group">
			<div class="center"><button onclick=""  class="item_add btn btn-primary col-md-12"><a href="cms-panel.php">Login</a></button></div>
		</div>
	</div>
</div>


<?php
        outputFooter();
?>