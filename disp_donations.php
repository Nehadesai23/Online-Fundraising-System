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
		$qry="select *, sum(amount) as sum from donator group by donator_name";
		$res=mysqli_query($conn, $qry);
		if($res)
		{	
		echo "<table class='table table-bordered'>";
		echo "<tr><th>Donator Name</th><th>Donator Mobile</th><th>Donator Email</th><th>Charity Name</th><th>Amount</th></tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			?>
				<tr>
				
					<td><font color='black'><?php echo $row['donator_name'];?></font></td>
					<td><font color='black'><?php echo $row['donator_mobile'];?></font></td>
					<td><font color='black'><?php echo $row['donator_email'];?></font></td>
					<td><font color='black'><?php echo $row['charity_name'];?></font></td>
					<td><font color='black'><?php echo $row['sum'];?></font></td>
				</tr>
			<?php	
		}
		}
		$qry="select sum(amount) as total from donator";
		$res=mysqli_query($conn, $qry);
		$row=mysqli_fetch_assoc($res);
		?>
		<tr>
		<td colspan="4" class="text-center"><font color='black'>Total Donations</font></td>
		<td><font color='black'><?php echo $row['total'];?></font></td>
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