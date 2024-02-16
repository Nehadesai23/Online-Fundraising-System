<?php 
include('reporters_header.php');
include_once('db.php');
?>
<head>
	<style>
	section{
		min-height:500px;
		line-height:30px;
	}
	cl{
	line-height:10px;
	}
	</style>
</head>
<body>

<section>
	<div class="container">
	<br>
		<?php
				$qry="select * from approved where id='".$_SESSION['name']['id']."'";
				$res=mysqli_query($conn,$qry);
				$total=mysqli_num_rows($res);
				if($total==1)
				{
					$row=mysqli_fetch_assoc($res);
					?>
					<div class="col-md-12 cl">
					<center><h1>You are Approved Reporter</h1></center><br>
					<div class="post-entry-1 h-100 bg-white text-center">
					<a href="#" class="d-inline-block">
					<img src="<?php echo $row['reporter_image'];?>" width="200" height="200" alt="Image" class="img-fluid">
					</a>
					  <div class="post-entry-1-contents">
					
						<h4 class="text-danger"><?php echo $row['reporter_name'];?></h4><br>
						<h4><?php echo $row['reporter_mobile'];?></h4><br>
						<h4 class='text-lowercase'><?php echo $row['reporter_email'];?></h4><br>
						<h4><?php echo $row['reporter_address'];?></h4><br>
						<a href="needy_ppl.php?id=<?php echo $row['id'];?>"><input type="button" class="btn btn-success" value="Click to Report"><br><br>
					  </div>
					</div>
					</div>
					<?php	
				}
				else{
					$qry="select * from reporter where id='".$_SESSION['name']['id']."'";
					$res=mysqli_query($conn,$qry);
					$row=mysqli_fetch_assoc($res);
					?>
					<div class="col-md-12 cl">
					<center><h1>You are Not Approved Reporter</h1></center><br>
					<div class="post-entry-1 h-100 bg-white text-center">
					<a href="#" class="d-inline-block">
					<img src="<?php echo $row['reporter_image'];?>" width="200" height="200" alt="Image" class="img-fluid">
					</a>
					  <div class="post-entry-1-contents">
					
						<h4 class="text-danger"><?php echo $row['reporter_name'];?></h4><br>
						<h4><?php echo $row['reporter_mobile'];?></h4><br>
						<h4 class='text-lowercase'><?php echo $row['reporter_email'];?></h4><br>
						<h4><?php echo $row['reporter_address'];?></h4><br><br>
				
					  </div>
					</div>
					</div>
					<?php		
				}
			?>	
	</div>
</section>
</body>
<?php
include_once('footer.php');
?>