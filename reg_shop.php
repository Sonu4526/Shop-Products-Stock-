<!DOCTYPE html>
<html>
<head>
	<title>Ekart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="C:\Users\Sonu\Desktop\ekart\register.js"></script>
</head>
<body>
	<form method="post" name="register" action="#" onsubmit = "return(validate());">
		<div>
		<h2><strong>Register Your Shop</strong></h2>	
		</div>
		
		<div class="input-group">
			<label >Shop Name</label>
			<input type="text" name="shop_name" value="" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="" required>
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="text" name="phone" value="" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="" required>
		</div>
		<div>
			<p style="color: red;">*note : Remember Email & Password for login</p>
		</div>
		
		<div class="input-group">
		<button class="btn" type="submit" name="submit"  style="background: #556B2F;" >Submit</button>
		<button class="btn" type="button" onclick="location.href='login.php'" name="save" style="float: right;" >Login</button>
		</div>
	</form>

</body>
</html>
<!--===================================================================================================
                                                 CONNECTION
    =================================================================================================-->
<?php

$con=mysqli_connect('localhost','root','','crud');

if (isset($_POST['submit'])) 
{
   $shop_name=$_POST['shop_name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $password=$_POST['password'];

   echo $sql="INSERT INTO `register`(`shop_name`, `email`, `phone`,`password`) VALUES ('$shop_name','$email','$phone','$password');";
   $result=mysqli_query($con,$sql);
    if ($result==true) {
           echo "Data Inserted !";
           header('location: login.php');
    }
    else{
      header('location: reg_shop.php');
    }
}
?>
