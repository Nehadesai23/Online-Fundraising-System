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
		$qry="select * from needy_people where id='".$_GET['id']."'";
		$res=mysqli_query($conn, $qry);
		$row=mysqli_fetch_assoc($res);
	?>
	<embed src="<?php echo $row['needy_people_income_certf'];?>">
	</div>
