<!DOCTYPE html>
<html>
<head>
	<title>Ekart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" name="login" action="#" onsubmit = "return(validate());" >
		<h2><strong>Login</strong></h2>
		<div class="input-group">
			<label >UserId</label>
			<input type="text" name="email" value="" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" value="" required>
		</div>
		<div class="input-group">
		<button class="btn" type="submit" name="submit" >Login</button>
		<button class="btn" type="button" onclick="location.href='reg_shop.php'" name="update" style="background: #556B2F; float: right;">SignUp</button>
		</div>
	</form>

</body>
</html>
<!--======================================================================================================================
	                                    Valid user can logged in
	===================================================================================================================-->
           <?php
           session_start();
            $conn=mysqli_connect('localhost','root','','crud');
           
           if(isset($_POST['submit']))
           {

            $email = $_POST['email']; 

            $password = $_POST['password'];
            
           echo $qry= "SELECT * FROM `register` WHERE email='$email' and password='$password'";
            $query = mysqli_query($conn,$qry);
            while ($row = mysqli_fetch_assoc($query))
            {
                 $_SESSION['email'] = $row['email'];
                 echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
                 header('Location: demo2.php');
            } 
            echo "connect";
            
            }
         
         ?>

