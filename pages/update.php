<?php
include('../db.php'); 
$update_view= $_GET['id'];
$up_show="SELECT * FROM user WHERE id = '".$update_view."' ";
$tk_var='';
$new_q=$con->query($up_show);
// if($con->query($d_q) === true);
// {
//   header("location:../pages/view.php");
// }
// mysqli_close($con);

if($tk_var='update')
  {

  if(isset($_POST['p1'],$_POST['p2'],$_POST['p3']))
  {
      $u_name=$_POST['p1'];
      $u_email=$_POST['p2'];
      $u_mob=$_POST['p3'];
      $up_q="UPDATE user SET name='$u_name' , email='$u_email' , mobile='$u_mob' WHERE id='".$update_view."'    ";
      if($con->query($up_q) === true);
{
  header("location:../pages/view.php");
}
  }

    
mysqli_close($con);
  // header("location:../pages/up_data.php");
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link rel="icon" href="../images/fav.ico" type="image" sizes="16x16">

    <!-- Custom CSS -->
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
</head>
<body>


<?php  
//for($i=1;$i>=($rsd->num_rows);$i++)
//for ($x = 0; $x <= 10; $x++)($row = $r->fetch_array(MYSQLI_ASSOC))
while($row = $new_q->fetch_array(MYSQLI_ASSOC))
  //if($db->query($sql)->num_rows>0)
{
      $c_n = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $mob = $row['mobile'];

?> 



  <form name="myform" class="form-horizontal" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" type="text" name="p1" value="<?php echo $name; ?>" class="form-control input-md" ng-model="p1text" required>
      
      
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" type="text" name="p2" value="<?php echo $email; ?>"  class="form-control input-md" ng-model="p2text" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mob">Mobile</label>  
  <div class="col-md-4">
  <input id="mob"  type="number" name="p3" value="<?php echo $mob; ?>" class="form-control input-md" ng-model="p3text" required>
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    

    <input type="submit" class="btn btn-success col-sm-3"  value="update" ng-disabled="myForm.$invalid">
    <!-- <button type="button" class="btn btn-danger col-sm-3" onclick="location.href='pages/view.html'">view</button> -->

  </div>
</div>
<?php

    } 

 ?>
</fieldset>
</form>
     
    

    <!-- <button type="button" class="btn btn-success col-sm-3" onclick="location.href='pages/view.php'">submit</button> -->
    <!-- <button type="button" class="btn btn-danger col-sm-3" onclick="location.href='pages/view.html'">view</button> -->

 
  
</body>
</html>