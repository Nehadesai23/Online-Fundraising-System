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
	<h2 class="text-center text-danger" style="margin-top:20px; margin-bottom:20px;">Transactions</h2>
		<?php
		$qry="select * from transactions";
		$res=mysqli_query($conn, $qry);
		$ctotal=0;
		$dtotal=0;
		$gtotal=0;
		echo "<table class='table table-hover table-bordered'>";
		echo "<tr class='bg-danger'><th><font color='black'>Action</font></th><th><font color='black'>From Name</font></th><th><font color='black'>To Name</font></th><th><font color='black'>Mobile Number </font></th><th><font color='black'>Amount</font></th></tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			?>
			<tr>
				<td><font color='black'><?php echo $row['action'];?></font></td>
				<?php
				if($row['from_name']==NULL)
				{
					?><td><font color='black'>Charity Organization System</font></td><?php
				}
				else{
					?><td><font color='black'><?php echo $row['from_name'];?></font></td><?php
				}
				?>
				<?php
				if($row['to_name']==NULL)
				{
					?><td><font color='black'>Charity Organization System</font></td><?php
				}
				else{
					?><td><font color='black'><?php echo $row['to_name'];?></font></td><?php
				}
				?>
				<td><font color='black'><?php echo $row['mobile'];?></font></td>
			    <td><font color='black'><?php echo $row['amount'];?> Rs/-</font></td>
			</tr>
			<?php
			if($row['action']=="Contributed")
			{
				$ctotal=$ctotal+$row['amount'];	
			}
			if($row['action']=="Donated")
			{
				$dtotal=$dtotal+$row['amount'];	
			}
			if($row['action']=="GivenToNeedy")
			{
				$gtotal=$gtotal+$row['amount'];	
			}
		}
		$total=$ctotal+$dtotal-$gtotal;
		?>
		<tr class="bg-success text-center">
		<td colspan="4"><font color='black'><b>Total</b></font></td>
		<td><font color='black'><b><?php echo $total; ?> Rs/-</b></font></td>
		</tr>
		<?php	
		echo "</table>";
		?>
	</div>
</div>
</div>

<?php
include_once('footer.php');
?>