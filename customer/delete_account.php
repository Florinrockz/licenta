
<br>

<h2 style="text-align:center; ">Doriti sa va stegeti contul?</h2>

<form action="" method="post">

<br>
<input type="submit" name="yes" value="Da" /> 
<input type="submit" name="no" value="Nu" />


</form>

<?php 
include("includes/db.php"); 

	$user = $_SESSION['customer_email']; 
	
	if(isset($_POST['yes'])){
	
	$delete_customer = "delete from customers where customer_email='$user'";
	
	$run_customer = mysqli_query($con,$delete_customer); 
	
	echo "<script>alert('Contul dumneavoastra a fost sters!')</script>";
	echo "<script>window.open('../index.php','_self')</script>";
	}
	if(isset($_POST['no'])){
	
	echo "<script>alert('Bine!')</script>";
	echo "<script>window.open('my_account.php','_self')</script>";
	
	}
	


?>