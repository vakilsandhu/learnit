<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>show feedback</title>

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
<table class="table table-bordered">
<tr>
<th>
name
</th>
<th>
Email
</th>
<th>
Comment
</th>
</tr>
<?php
include("connection.php");
$sql="select * from contact";
$q=mysqli_query($con,$sql);
while($dr=mysqli_fetch_array($q))
{
?>

<tr>
<td>
<?php
echo $dr['name']
?> 
</td>
<td>
<?php
echo $dr['email']
?> 
</td>
<td>
<?php
echo $dr['comment']
?> 
</td>

</tr>
<?php

}
?>
</table>





</div>

</body>
</html>
