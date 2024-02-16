<?php
include_once('charity_header.php');
include_once('db.php');
?>
<head>
	<style>

	</style>
</head>
<body>
	<div class="container">
	
		<?php
		$qry="select * from reg_charity_org";
		$res=mysqli_query($conn,$qry);
		echo "<table class='table table-bordered'>";
		echo "<tr class='bg-danger'><th><font color='black'>Charity Name</font></th><th><font color='black'>Charity Mobile</font></th><th><font color='black'>Charity Email</font></th><th><font color='black'>Charity Address</font></th></tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			?>
			<tr>
				<td><font color="black"><?php echo $row['charity_org_name'];?></font></td>
				<td><font color="black"><?php echo $row['charity_org_mobile'];?></font></td>
				<td><font color="black"><?php echo $row['charity_org_email'];?></font></td>
				<td><font color="black"><?php echo $row['charity_org_address'];?></font></td>
			</tr>
			<?php
		}
		echo "</table>";
		?>
	</div>
</body>
<?php
include_once('footer.php');
?>