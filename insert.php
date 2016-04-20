<!-- <?php 

	include('db.php');
	$p1= $_POST['f1'];
	$p2= $_POST['f2'];
	$p3= $_POST['f3'];

	$inData = "INSERT INTO first_CRUD (name_list,email_list,mobile_num) VALUES ('$p1', '$p2' ,'$p3')    ";
	//$inData = "INSERT INTO first_CRUD (name_list,email_list,mobile_num) VALUES ('".$p1."' , '".$p2."' ,'".$p3."')    ";
  	// $cn =$db->
  	mysqli_query($db,$inData);
  	mysqli_close($db);

 ?> -->