<?php
include 'header.html';
include 'db.php';
if($_POST)
{
$name=$_POST['name'];
$no=$_POST['no'];
$email=$_POST['email'];
$add=$_POST['add'];

	mysql_query("INSERT INTO contactus(name,email,mobile_no,comment,doc) VALUES('$name','$email','$no','$add',CURDATE())");
}
?>
<html>
<body>
<style>
table {
    margin-right: 30%;
	}
th{
width:100px;
height:50px;
}
tr:nth-child(even){background-color: #f2f2f2}
table, td {
    border: 1px solid black;
}
</style>
  <div>
  <strong><center><h1><span style="color:#089f8a; font-weight:bold;">Contact Us</span></h1></center></strong><br />
</div>
  <div class="contact_details" style="float:left;padding-left:10%;">
<strong>
<p style="color:#089f8a; padding-left:20%;">Sparsh Balgram & <br>Administrative office </p>
<p style="color:#089f8a; padding-left:20%;">(U/O Yashshree Shikshan Sanstha)</p></strong>
<br/>
<p style="padding-left:20%;"><span style="font-style: italic; ">8, Jasraj complex, 2nd floor <br>
Above Pune Jilha Madhyavarti Bank. <br>
Pune-Mumbai old highway. <br>
Nr. Khadaki Rly. Station, Bopodi, <br>
PUNE- 411003, (INDIA)</p><br></span>
<p style="color:#089f8a; padding-left:20%;"><strong>Phone No.:</strong> <br> <span style="color:#464646; "> (020) 25823700 <br>
+91 76200 40230</span></p><br>

<p style="color:#089f8a; padding-left:20%;"><strong>Email Id:</strong><br>
<span style="color:#464646; font-style: italic;">sparsh.balgram@gmail.com</a></span><br>
<span style="color:#464646; font-style: italic;">mahesh@sparshbalgram.com</a></span></p><br>
</div>
<div>
<form action="" method="POST">
<table align="right">
<tr>
<th colspan=2><strong>Send your information for updates</strong></th>
</tr>
		<tr>
		<td>Name *:</td>
		<td><input type="name" name="name" required/><br /></td>
		</tr>
		<tr>
		<td>Contact No. *:</td>
		<td> <input type="telephone" name="no" required/><br /></td>
		</tr>
			
		<tr>
		<td>Email *:</td>
			<td> <input type="email" name="email" required/><br /></td>
			</tr>
		
			<tr>
			<td>Comment *:</td>
			<td> <input type="address" name="add" required/><br /></td>
			</tr>

			
			<th>	
			<center>
			<input type="submit" value="Submit" />
			
			</center>
			</th>
</table>	
</form>
</div>
<div style="clear:both"></div>
<?php
include 'footer.html'
?>

</body>
</html>