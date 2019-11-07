<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Works Home</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/mycss.css" />
</style>
</head>
<body>
<div class="container-fluid" id="con">
<?php
include("header.php");
?>



                     	  <div class="row" id="profile">
                        <div class="col-md-12">
                        <div class="col-md-4">
                        <?php
include("connection.php");
  $sql="select * from profiletable where id='".$_GET['id']."'";
  $query=mysqli_query($con,$sql);
  while($dr=mysqli_fetch_array($query))
  {
    
?>
                        <div class="col-md-12">
                        <img src="images/<?php echo $dr['pic'] ?>" />
                        </div>
                              <div class="col-md-12">
                           
                              <h3>
                           <?php echo $dr['name'] ?>
                                </h3>
                                 
                              </div>
                        </div>
                                 <div class="col-md-8">
                                 <h4>
                                    Profile
                                    </h4>
                                 <p>
                                <?php echo $dr['type'] ?>
                                 </p>
                                    <h4>
                                    About
                                    </h4>
                                 <p>
                                <?php echo $dr['speciality'] ?>
                                 </p>
                                 <h4>
                                 Experinece
                                 </h4>
                                 <p>
                                 <?php echo $dr['experience'] ?>
                             
                                 </p>
                                 <h4>
                                 
                                 </h4>
                                 </div>
                                 <?php
								 }
								 ?>
                        </div>
                               </div>  
                            <?php
							include("footer.php");
							?>
                            </div>

</body>
</html>
