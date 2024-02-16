<?php 
include_once('header.php');
include_once('db.php');
?>
<head>
	<style>
		form{
			margin-top:10px;
			border:1px solid black;
			padding:20px;
			background-color:#6f6f6f;
			color:white;
			text-align:center;
		}
		form h2{
			color:white;
			text-align:center;
		}
		.box-92819{
			z-index: 2;
			position: absolute;
			top: 27%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			min-width: 300px; 
		}
		section{
			min-height:500px;
		}
	</style>
</head>
    <section>
	  <h2 class="text-center" style="margin-top:20px;">Report About Needy People</h2><br>
      <div class="box-92819">
			<form action="reporter.php" method="post">
				<h2>Reporters</h2><br>
				<div class="form-group">
				<input type="text" name="user" placeholder="Username" required class="form-control">
				</div>
				<div class="form-group">
				<input type="password" name="pass" placeholder="Password" class="form-control">
				</div>
				<div class="form-group">
				<center><input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit"></center>
				</div>
			</form>	
      </div>
	</section>
	
<?php 
include_once('footer.php');
?>
