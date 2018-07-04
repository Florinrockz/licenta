<!DOCTYPE>
<?php 

include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="images/logo.gif" /> </a>
			<img id="banner" src="images/ad_banner.gif" />
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="index.php">Acasa</a></li>
				<li><a href="all_products.php">All Produsele</a></li>
				<li><a href="customer/my_account.php">Contul meu</a></li>
				<li><a href="#">Inregistrare</a></li>
				<li><a href="cart.php">Cos de cumparaturi</a></li>
				<li><a href="#">Contact</a></li>
			
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Cauta produs"/ > 
					<input type="submit" name="search" value="Cauta" />
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				<div id="sidebar_title">Categorii</div>
				
				<ul id="cats">
				
				<?php getCats(); ?>
				
				<ul>
					
				<div id="sidebar_title">Producator</div>
				
				<ul id="cats">
					
					<?php getBrands(); ?>
				
				<ul>
			
			
			</div>
		
			<div id="content_area">
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					
					Welcome Guest! <b style="color:yellow">Cosul -</b> Total produse: Pret total: <a href="cart.php" style="color:yellow">Du-te la cos</a>
					
					
					
					</span>
			</div>
			
				<div id="products_box">
	<?php 
	$get_pro = "select * from products";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
	
		echo "
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					
					<img src='admin_area/product_images/$pro_image' width='180' height='180' />
					
					<p><b> $pro_price lei</b></p>
					
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Detalii</a>
					
					<a href='index.php?pro_id=$pro_id'><button style='float:right'>Adauga in cos</button></a>
				
				</div>
		
		
		";
	
	}
	?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:30px;">&copy; 2018 by www.sfshop.com</h2>
		
		</div>
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>