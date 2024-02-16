<?php
session_start();
include_once('db.php');
		require_once('dompdf\autoload.inc.php');
		use Dompdf\Dompdf;
		$pdf = new Dompdf;
		ob_start();
		?>
		<html>
		<head>
		</head>
		<body>
	
		<p align="right">Date:<?php echo date('d-m-Y');?></p>
		<h3 align="center">Charity Organization Contribution Receipt</h3><br>
		<p><?php echo $_GET['charity_name']." ";?>has successfully contributed <?php echo $_SESSION['amount'];?>Rs/-  amount on <?php echo date('d-m-Y');?>. Thank you for contributing in our Charity Organization. This System provides social services for the needy and low income families by donating money.</p><br>
		<img src="images/bill.png" align="right">
		</body>
		
		</html>
		<?php
		$html=ob_get_clean();
		$pdf->loadHtml($html);
		$pdf->setPaper('A6','Landscape');
		$pdf->render();
		$pdf->stream();
?>