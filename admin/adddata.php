<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="admincss.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="file:///F|/home works/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="file:///F|/home works/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<?php include("ad1.php")?>
<div class="col-md-10">
<?php include("ad2.php")?>
<?php
include("connection.php");
if(isset($_POST['sub']))
{
$filename=basename($_FILES['pic']['name']);
$path="../images/".$_FILES['pic']['name'];


$sql="insert into profiletable(name,phone,city,type,pic,experience,speciality)values('".$_POST['name']."','".$_POST['phone']."','".$_POST['city']."','".$_POST['labe']."','".$filename."','".$_POST['experience']."','".$_POST['speciality']."')";
if(mysqli_query($con,$sql))
{
move_uploaded_file($_FILES['pic']['tmp_name'],$path);
echo "<script>alert('data added sucessfully')</script>";
}
else
{
echo mysqli_error($con);
}
}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" class="form-control" name="name">

    <label>Experience:</label>
    <input type="text" class="form-control" name="experience">
    
    <label>Picture:</label>
    <input type="file" class="form-control" name="pic">
    
<label>Type</label></td><td><select class="form-control" name="labe"><option>Select</option>
<option>Plumber</option>
<option>Mason</option>
<option>Electricion</option>
<option>Gardner</option>
<option>Driver</option>
</select></td>
</tr>


  
    <label>Speciality:</label><br />
    <textarea name="speciality"></textarea>
    <br />
    <label>Phone:</label>
    <input type="text" class="form-control" name="phone">
  <label>City:</label>
    <input type="text" class="form-control" name="city">
  
  <input type="submit" value="submit" name="sub"/>
</form>





</div>










</body>
</html>
