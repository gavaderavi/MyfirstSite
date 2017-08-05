<html>
<body>
<?php
include 'header.html'
?>
<style>
#gallery
{
padding-left:15%;
}
#gallery div
{
padding:5px;
float:left;
width:20%;
}
#gallery div img
{
width:100%
}
</style>
<div id="gallery">
	<?php
	for($i=1;$i<=15;$i++)
	{?>
	<div>
	<img src="Gallery/img<?php echo $i;?>.jpg">
	</div>
	<?php
	}
	?>	

</div>
<div style="clear:both">
<?php
include 'footer.html'
?>
</body>
</html>