<?php
    include ('../common.php');
    outputHeader("CMS Login");  
    outputBannerNavigation("Home");
?>      

<!--- cms navbar -->
<div class="cms-container">
    <ul>
		<li><a href="add_product.php">Add product</a></li>
        <li><a href="edit_product.php">Edit product</a></li>
		<li><a href="view_products.php">View products</a></li>
		<li><a href="orders.php">Placed orders</a></li> 
    </ul>        
</div>

<?php
        outputFooter();
?>