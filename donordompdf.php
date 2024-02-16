<?php
	include_once('db.php');
	session_start();
	require_once('dompdf/autoload.inc.php');
	use Dompdf\Dompdf;
	$pdf=new Dompdf;
	ob_start();
?>
	<html>
		<head>
		</head>
		<body>
		<p align="right">Date:<?php echo date('d-m-Y');?></p>
		<h3 align="center">Donor Receipt</h3><br>
		<p><?php echo $_GET['donor_name']." ";?>has successfully donated <?php echo $_SESSION['donor_amount'];?>Rs/-  amount on <?php echo date('d-m-Y');?> to charity <?php echo $_SESSION['charity'];?>. Thank you for contributing in our Charity Organization. This System provides social services for the needy and low income families by donating money.</p><br>
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