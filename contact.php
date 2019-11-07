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

                    <div class="col-md-12" style="margin-top:50px;">
                    <h4 style="background-color:#003366; padding:10px;;color:white;">Contact us</h4>
                    <form name="post">
                    <div class="form-group">
    <label for="pwd">name:</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">comment:</label>
     <textarea class="form-control"></textarea>
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
                    </div>
                            
                            <?php
							include("footer.php");
							?>
                            </div>

</body>
</html>
