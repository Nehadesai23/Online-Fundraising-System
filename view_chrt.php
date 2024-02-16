<?php
include_once('donors_header.php');
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
		echo "<br>";
		echo "<table class='table table-bordered'>";
		echo "<tr class='bg-danger'><th>Charity Name</th><th>Charity Mobile</th><th>Charity Email</th><th>Charity Address</th><th>Donate</th></b>";
		while($row=mysqli_fetch_assoc($res))
		{
			?>
			<tr>
				<td><font color="black"><?php echo $row['charity_org_name'];?></font></td>
				<td><font color="black"><?php echo $row['charity_org_mobile'];?></font></td>
				<td><font color="black"><?php echo $row['charity_org_email'];?></font></td>
				<td><font color="black"><?php echo $row['charity_org_address'];?></font></td>
				<td><a href="donate_to_charity.php?id=<?php echo $row['id'];?>"><input type="submit" name="submit" value="Donate" class="btn btn-success"></a></td>
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