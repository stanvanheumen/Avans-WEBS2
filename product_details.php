<?php
require_once ('inc/database.php');
require_once ('model/product.inc.php');

$db = new db();
$db->connect();
$product_id = $_GET['product_id'];
$product = $db->queryObject("SELECT * FROM product WHERE id='" . $product_id . "'", 'Product');

?>

<!DOCTYPE html>
<html lang="nl">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Groep L">
		<title>Home</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
	</head>

	<body>
		<?php include 'header.php'; ?>
		
			<div class="container">
				<h1><?php echo $product->getProductNaam(); ?></h1>
				<table class="table">
					<tr>
						<td>Productnaam<td>
						<td><?php echo $product->getProductNaam(); ?></td>
					</tr>
					<tr>
						<td>Beschrijving<td>
						<td><?php echo $product->getBeschrijving(); ?></td>
					</tr>
					<tr>
						<td>Prijs<td>
						<td><?php echo '&euro;' . $product->getPrijs(); ?></td>
					</tr>
					<tr>
						<td>Op voorraad<td>
						<td>
							<?php 
								if ($product->getVoorraad() > 0) echo 'Ja';
								else echo 'Nee';
							?>
						</td>
					</tr>
				</table>
			</div>
		
		<?php include 'footer.php'; ?>
		
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
	
</html>