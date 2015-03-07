<?php
require_once ('inc/database.php');
require_once ('model/product.inc.php');

$db = new db();
$db->connect();
$product_id = $_GET['product_id'];
$product = $db->queryObject("SELECT * FROM product WHERE id='" . $product_id . "'", 'Product');

session_start();
$_SESSION['title'] = $product->getProductNaam();
require_once 'inc/template/header.php';
?>		

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
		
<?php require_once 'inc/template/footer.php'; ?>