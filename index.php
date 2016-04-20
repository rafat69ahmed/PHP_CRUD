<?php 

$p1= $p2=$p3='';

  include('db.php');

if (isset($_POST['p1'])) {

  $p1= $_POST['p1'];
  $p2= $_POST['p2'];
   $p3= $_POST['p3'];

  $inData = "INSERT INTO user (name,email,mobile) VALUES ('$p1' , '$p2' ,'$p3')";
  

    if($con->query($inData) === TRUE){
      header('location:pages/view.php');
    }

    mysqli_close($con);
}


 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
  <form class="form-horizontal" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" type="text" name="p1" placeholder="enter your name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" type="text" name="p2" placeholder="enter your email" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mob">Mobile</label>  
  <div class="col-md-4">
  <input id="mob"  type="text" name="p3" placeholder="enter your contact" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">option</label>
  <div class="col-md-8">
    

    <input type="submit" class="btn btn-success col-sm-3" value="submit">
    <!-- <button type="button" class="btn btn-danger col-sm-3" onclick="location.href='pages/view.html'">view</button> -->

  </div>
</div>

</fieldset>
</form>
     
    

    <!-- <button type="button" class="btn btn-success col-sm-3" onclick="location.href='pages/view.php'">submit</button> -->
    <!-- <button type="button" class="btn btn-danger col-sm-3" onclick="location.href='pages/view.html'">view</button> -->

 
  
</body>
</html>