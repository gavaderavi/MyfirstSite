<html>
<head>
<body>
<?php
include 'header.html';
include 'db.php';
if($_POST)
{
$name=$_POST['name'];
$no=$_POST['no'];
$email=$_POST['email'];
$add=$_POST['add'];
$ptc=$_POST['ptc'];
$amount=$_POST['amount'];


	mysql_query("INSERT INTO donateus(name,email,mobileno,addr,pin,amount) VALUES('$name','$email','$no','$add','$ptc','$amount')");
	
	
}
?>

<div><img src="images/divideronbottom.png"/ width="100%"></div><br/>

<style type="text/css">
table {
    border-collapse: collapse;
    width: 40%;
}

tr:nth-child(even){background-color: #f2f2f2}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	

	}
	th{
	    background-color: #4CAF50;
    color: white;

	}

</style>
<form action="" method="post">
<table align="left">
<th><strong>Account Details to Tranfer Money</strong>
</th>
  <tr>
    <td>Bank Name</td>
    <td>HDFC Bank</td>
  </tr>
  <tr>
    <td>A/C Name </td>
    <td>BALGRAM</td>
  </tr>
  <tr>
    <td>A/C No.</td>
    <td>04xxxxxxxxx036</td>
  </tr>
  <tr>
    <td>Branch</td>
    <td>tathawade(wakad), Pune - 411033(INDIA)</td>
  </tr>
  <tr>
    <td>RTGS/NEFT/IFSC Code</td>
    <td>HDFC 0000xxx</td>
  </tr>
</table>

</div>
<div>

<table align="right" >
<th><strong>Donate Money By Card</strong>
</th>
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
			<td>Address *:</td>
			<td> <input type="address" name="add" required/><br /></td>
			</tr>

			<tr>
			<td>Post Code *:</td>
			<td> <input type="postcode" name="ptc" required/><br /></td>
			</tr>
			
			<tr>
			<td>Card No. *:</td>
			<td> <input type="number" name="Cno"  required/><br /></td>
			</tr>
			<tr>
			<td>Amount*:</td>
			<td> <input type="number" name="amount" required/><br /></td>
			</tr>
			<tr>
			<td>expiry date</td>
			<td> <input type="date" name="exdate" required></td>
			</tr>
			
			<tr>
			<td>CVV</td>
			<td><input type="number" name="cvvno" max="3" required></td>
			</tr>
			
			<td>	
			<center>
			<input type="submit" value="Submit" />
			</center>
			</td>
</table>	
</form>
</div><!--contact-->
<div><img src="images/divideronbottom.png"/ width="100%"></div><br/>
<?php
include 'footer.html'
?>
</body>
</head>
</html>