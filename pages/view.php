<?php
  include('../db.php');
  $sql = "SELECT * FROM user";
  $rsd =$con->query($sql);
  // $db->query($p)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>crud</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .panel-table .panel-body{
  padding:0;
}

.panel-table .panel-body .table-bordered{
  border-style: none;
  margin:0;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
    text-align:center;
    width: 100px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
  border-right: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
  border-left: 0px;
}

.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
  border-bottom: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th{
  border-top: 0px;
}

.panel-table .panel-footer .pagination{
  margin:0; 
}

/*
used to vertically center elements, may need modification if you're not using default sizes.
*/
.panel-table .panel-footer .col{
 line-height: 34px;
 height: 34px;
}

.panel-table .panel-heading .col h3{
 line-height: 30px;
 height: 30px;
}

.panel-table .panel-body .table-bordered > tbody > tr > td{
  line-height: 34px;
}


    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link rel="icon" href="../images/fav.ico" type="image" sizes="20x20">

<div class="container">
    <div class="row">
    
    <p></p>
    <h1>View Data In a Table</h1>
    <p>Update Or Delete Data From Here.</p>
    <p>&nbsp;</p><p>&nbsp;</p>
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Panel Heading</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create" onclick="location.href='../index.php'">Create New</button>
<!--                     <button type="button" class="btn btn-primary col-sm-4" onclick="location.href='pages/login.html'">Log in</button>
 -->                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>contact</th>
                    </tr> 
                  </thead>

<?php  
//for($i=1;$i>=($rsd->num_rows);$i++)
//for ($x = 0; $x <= 10; $x++)($row = $r->fetch_array(MYSQLI_ASSOC))
while($row = $rsd->fetch_array(MYSQLI_ASSOC))
  //if($db->query($sql)->num_rows>0)
{
      $c_n = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $mob = $row['mobile'];

?>                  
                      <tbody>

                          <tr>
                            <td align="center">
                              <a class="btn btn-default" href="update.php?id=<?php echo $c_n ?>"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger" href="delete_data.php?id=<?php echo $c_n ?>"><em class="fa fa-trash"></em></a>
                            </td>
                            <!-- <td class="hidden-xs">1</td> -->
                            <td><?php echo $c_n; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $mob; ?></td>
                          </tr>
<?php

    } 

 ?>
                  </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>
<script type="text/javascript">

</script>
</body>
</html>
