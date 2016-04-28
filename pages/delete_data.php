<?php
include('../db.php'); 
$delete_q = $_GET['id'];
$d_q="DELETE FROM user WHERE id = '".$delete_q."' ";
if($con->query($d_q) === true);
{
	header("location:../pages/view.php");
}
mysqli_close($con);
 ?>