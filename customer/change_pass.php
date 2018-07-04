<h2 style="text-align:center;">Schimbare parola</h2>
<form action="" method="post"> 
	
	<table align="center" width="600">
	<tr>
	<td align="right"><b>Introduceti parola curenta:</b></td>
	<td><input type="password" name="current_pass" required></td>
	</tr>
	
	<tr>
	<td align="right"><b>Introduceti noua parola:</b></td>
	<td><input type="password" name="new_pass" required></td>
	</tr>
	
	<tr>
	<td align="right"><b>Intoduceti din nou noua parola:</b></td>
	<td><input type="password" name="new_pass_again" required></td>
	</tr>
	
	<tr align="center">
	<td colspan="3"><input type="submit" name="change_pass" value="Schimba parola"/></td>
	</tr>
	
	</table>


</form>
<?php 

include("includes/db.php"); 


	if(isset($_POST['change_pass'])){
		
		$user = $_SESSION['customer_email']; 
	
		$current_pass = $_POST['current_pass']; 
		$new_pass = $_POST['new_pass']; 
		$new_again = $_POST['new_pass_again']; 
		
		$sel_pass = "select * from customers where customer_pass='$current_pass' AND customer_email='$user'";
		
		$run_pass = mysqli_query($con, $sel_pass); 
		
		$check_pass = mysqli_num_rows($run_pass); 
		
		if($check_pass==0){
		
		echo "<script>alert('Parola curenta gresita!')</script>";
		exit();
		}
		
		if($new_pass!=$new_again){
		
		echo "<script>alert('Noua parola gresita!')</script>";
		exit();
		}
		else {
		
		$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$user'";
		
		$run_update = mysqli_query($con, $update_pass); 
		
		echo "<script>alert('Parola schimbata cu succes!')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";
		}
	
	}




?>

