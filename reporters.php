<?php 
include('reporters_header.php');
include_once('db.php');

?>
<head>
	<style>
		.cl{
			line-height:20px;
		}
		section{
			min-height:500px;
		}
	</style>
</head>
<body>
<section>
<br>
	<div class="container">
		<?php	
				$qry="select * from approved";
				$res=mysqli_query($conn,$qry);
				$total=mysqli_num_rows($res);
				if($total>0)
				{
				while($row=mysqli_fetch_assoc($res))
					{
					?>
					<div class="col-md-4 cl">
					<center>
					<img src="<?php echo $row['reporter_image'];?>" width="200" height="200" style="border-radius:50%" alt="Image" class="img-fluid">
						<h4 class="text-danger"><?php echo $row['reporter_name'];?></h4><br>
						<h4><?php echo $row['reporter_mobile'];?></h4><br>
						<h4 class='text-lowercase'><?php echo $row['reporter_email'];?></h4><br>
						<h4><?php echo $row['reporter_address'];?></h4><br>
					</center>	
					  
				
					</div>
					<?php	
					}
				}
				else{
					?><h1 class="alert alert-danger text-center">Reporters are Not Approved yet.</h1><?php
				}
			?>
	</div>
</section>
</body>
<?php
include_once('footer.php');
?>