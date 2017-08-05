<html>
<?php
include 'header.html';
include 'db.php';

if($_POST)
{
$uname=$_POST['uname'];
$pass=$_POST['password'];
$res=mysql_query("select * from login where name='".$uname."' and password='".$pass."'");
if(mysql_num_rows($res)>0)
{
	echo"ye";
header('location:../balgram/Admin/index.php');
}
else
header('location:../balgram/admin.php');
}
?>

<style>
body{
	background-image: url("images/bg.jpg");
	color:#f5f5f5;
	text-align:center;
}
	
#loginform{
	margin-top:150px;
  margin-left:auto;
  margin-right:auto;
	width:270px;
}
	
.input{
	width:270px;
    padding:15px 25px;
	background: #f5f5f5;
	margin-top:15px;
}

.loginbutton{
	background-color:#ffdd00;
	display:inline-block;
	font-weight:bold;
	width:270px;
	height:50px;
	margin-top:20px;
	margin-bottom:20px;
	
}

</style>
<body>


<form id="loginform" method="post" action="">
<input type="text" class="input" name='uname' placeholder="E-mail" required/> 
<input type="password" class="input" name='password' placeholder="Password" required/>
<input type="submit" class="loginbutton" value="SIGN IN" />
</form>

<div style="clear:both"></div>

<?php
include 'footer.html'
?>
</body>


</html>