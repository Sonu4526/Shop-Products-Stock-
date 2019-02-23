<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	$name = "";
	$address = "";
	$id = 0;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Data inserted"; 
		header('location: demo2.php');
	}

// ...

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "One information deleted!"; 
	header('location: demo2.php');
}
