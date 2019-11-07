<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/mycss.css" />

</head>

<body>
<div class="container-fluid" id="con">
<?php
include("header.php");
?>



<div class="row" id="r3">
  <h3>
                                   <?php
								   echo $_GET['type']
								   ?>
  </h3>
<?php
include("connection.php");
  $sql="select * from profiletable where type='".$_GET['type']."'";
  $query=mysqli_query($con,$sql);
  while($dr=mysqli_fetch_array($query))
  {
    
?>
                               
                    <div class="col-md-3">
                    <img src="images/<?php echo $dr['pic'] ?>" />
                    <h4><a href="profile.php?id=<?php  echo $dr['id']?>"><?php echo $dr['name']?></a></h4>
                    </div>
                    
                    <?php
					}
					?>
  </div>                  
<?php
include("footer.php");
?>

</div>
</body>
</html>
