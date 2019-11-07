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
function update()
{
$sql="update adminlogin set password='".$_POST['new']."' where username='".$_SESSION['un']."'";
if(mysqli_query($con,$sql))
{
echo "<script>alert('password changed')</script>";
$_SESSION['un']=$_POST['new'];
}
else
{
echo "<script>alert('nvalid id password')</script>";
}

}
session_start();
include("connection.php");
if(isset($_POST['update']))
{
$sql="select * from adminlogin where username='".$_SESSION['un']."' and password='".$_POST['old']."'";
$query=mysqli_query($con,$sql);
if(mysqli_num_rows($query))
{
update();
}
else
{
echo "<script>alert('invalid id password')</script>";
}
}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<label>Old Password:</label>
    <input type="password" class="form-control" name="old">
    <label>New Password:</label>
    
    <input type="password" class="form-control" name="new">
    
    <label>Confirm Password:</label>
    <input type="password" class="form-control" name="done">
    
    <input type="submit" value="change" name="update"/>
    </form>




</div>










</body>
</html>
