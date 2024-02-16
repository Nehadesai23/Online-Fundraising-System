<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
if(!isset($_SESSION['name']['id']))
{
	header('location:reg.php');
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Charity Organization System</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Bettering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- // Meta Tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!--testimonial flexslider-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
	<!--//fonts-->
<style>
.header{
	line-height:0px;
	}
	#bs-example-navbar-collapse-1 ul li{
		margin-right:-10px;
	}
	#bs-example-navbar-collapse-1 ul li a:hover{
		border:1px solid red;
		padding:10px;
		background-color:orange;
	}
	
</style>
</head>

<body>
	<!--Header-->
	<div class="header">
	<div class="top">
					
						<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h2 style="margin-top:25px;margin-left:40px;"><a href="index.php"><font color="white">Charity Organization System</font></a></h2>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php" class="active"><font color="white">Home</font></a></li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font color="white">Reportors<span class="caret"></span></font></a>
										<ul class="dropdown-menu">
											<li><a href="reporters.php"><font color="white">View Reporters</font></a></li>
											<li><a href="reporter.php"><font color="white">Report About Needy</font></a></li>
										</ul>
							</li> 
							<li><a href="contribute.php" class="active"><font color="white">Contibutions</font></a></li>
							<li><a href="charity_org.php"><font color="white">Charity Organizations</font></a></li>
							<li><a href="donate.php"><font color="white">Donations</font></a></li>
							<li><a href="logout.php"><font color="white">Logout</font></a></li>
							<p style="margin-left:604px; margin-top:20px; padding-bottom:20px; color:orange;">Welcome <?php echo $_SESSION['name']['name']?></p>
						</ul>
						

					</div>
					<div class="clearfix"> </div>
				</nav>
					
						
				
	</div>
		<!--top-bar-w3layouts-->
		
		<!--//top-bar-w3layouts-->
		<!--Slider-->
		