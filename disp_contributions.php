<?php
include_once('header1.php');
include_once('db.php');
?>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2 section">
	<br><br>
	<?php 
	include_once('side.php');
	?>
	</div>
	<div class="col-md-9">
		<?php
		$qry="select * from contribute";
		$res=mysqli_query($conn, $qry);
		echo "<table class='table table-bordered'>";
		echo "<tr><th>Charity Name</th><th>Contact Number</th><th>Email</th><th>Address</th><th>Contributed Amount</th></tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			?>
				<tr>
					<td><font color='black'><?php echo $row['charity_name'];?></font></td>
					<td><font color='black'><?php echo $row['charity_mobile'];?></font></td>
					<td><font color='black'><?php echo $row['charity_email'];?></font></td>
					<td><font color='black'><?php echo $row['charity_address'];?></font></td>
					<td><font color='black'><?php echo $row['contr_amount'];?></font></td>	
				</tr>
			<?php	
		}
		$qry="select * from contribute";
		$res=mysqli_query($conn, $qry);
		$row=mysqli_fetch_assoc($res);
		?>
		<tr>
		<td colspan="4" class="text-center"><font color='black'>Total Contributions</font></td>
		<td><font color='black'><?php echo $row['total_contr'];?></font></td>
		</tr>
		<?php
		echo "</table>";
		?>
		
	</div>
</div>
</div>
</div>
<?php
include_once('footer.php');
?>