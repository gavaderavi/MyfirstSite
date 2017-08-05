<?php
$db="balgram";
$username=$_POST['uname'];
$password=$_POST['pwd'];
$con=new mysqli("localhost","root","","balgram");
$sql="select sno from login where username='$username' and password='$password'";
$result=$con->query($sql);
if($result->num_rows>0)
header("Location:Admin/");
else
header("Location:admin.php");
?>