<?php 
	$db = new mysqli("localhost","root","","crud");
	if($db->connect_error){
		die("connection failed:" . $db->connect_error);
	}else{
		$con =$db;
	}
	//echo "Connected successfully";
 ?>
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// ?>