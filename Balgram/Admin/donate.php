<html>
<?php
include 'header.html';
include 'db.php';
?>
<head>

<style>

table {
    border-collapse: collapse;
    width: 100%;
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
<body>

<div><img src="images/divideronbottom.png"/ width="100%"></div><br/>

<form id="loginform" method="post" action="">
<h1 align="center" style="color:grey;">Donate Information</h1>
<table align="left" cellspacing=10px border=0 class="gridtable" align="center" style="color:black; font-size:18px;" >
<tr  style="color:RED;font-size:18px;">
<th><strong>No.</strong></th>
<th><strong>Name</strong></th>
<th><strong>Email</strong></th>
<th><strong>Mobile No</strong></th>
<th><strong>Address</strong></th>
<th><strong>Pin Code</strong></th>
<th><strong>Amount</strong></th>
</tr>

<?php
	
$sql = "SELECT * FROM donateus WHERE 1";
$res=mysql_query($sql);
 $i=0;
if(mysql_num_rows($res)>0)
{
	while($row=mysql_fetch_array($res))
	{
		
?>
<tr>
<td><?php echo ++$i; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobileno']; ?></td>
<td><?php echo $row['addr']; ?></td>
<td><?php echo $row['pin']; ?></td>
<td><?php echo $row['amount']; ?></td>
</tr>
<?php
	}	
}
?>
</table>

</form>
<div><img src="images/divideronbottom.png"/ width="100%"></div><br/>

<div style="clear:both"></div>

<?php
include 'footer.html'
?>
</body>

</head>
</html>