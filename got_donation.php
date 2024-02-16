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
		$qry="select * from donate_to_ppl d inner join needy_people n on d.id=n.id ";
		$res=mysqli_query($conn, $qry);
		echo "<table class='table table-bordered'>";
		echo "<tr><th>Needy Person Image</th><th>Needy Person Name</th><th>Needy Person Mobile</th><th>Needy Person Address</th><th>Got Donation</th></tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			?>
				<tr>
					<td><img src="<?php echo $row['needy_people_image'];?>" width="100" height="100"></td>
					<td><font color='black'><?php echo $row['needy_people_name'];?></font></td>
					<td><font color='black'><?php echo $row['needy_people_mobile'];?></font></td>
					<td><font color='black'><?php echo $row['needy_people_address'];?></font></td>
					<td><font color='black'><?php echo $row['amount'];?></font></td>
				</tr>
			<?php	
		}
		echo "</table>";
		?>
	</div>
	
	</div>
</div>
</div>
</div>
<?php
include_once('footer.php');
?>