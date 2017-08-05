<?php
$db="balgram";
$username=$_POST['uname'];
$password=$_POST['pass'];
$con=new mysqli("localhost","root","","balgram");
if($con->connect_error)
{
	die("could not connect:". $con->connect_error);
	}
	

$query="INSERT INTO login(username,password)VALUES('$username','$password')";


if($con->query($query)===TRUE)
{
	echo "new record created successfully";
	}
else
{
	echo "Error: ".$query."<br>".$con->error;
	
}
$con->close();
?>