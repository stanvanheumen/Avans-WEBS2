<?php
require_once ('inc/database.php');
require_once ('model/categorie.inc.php');
require_once ('model/product.inc.php');

$db = new db ();
$db->connect ();

$search_category = false;

if (isset ( $_GET ['categorie'] ) && is_numeric ( $_GET ['categorie'] )) {
	$search_category = $db->queryObject ( "SELECT * FROM categorie WHERE id='" . $db->escape ( $_GET ['categorie'] ) . "'", 'Categorie' );
}
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
		
		<div class="custom-container content">
		<div class="container">
			<h1>Producten</h1>

			<div class="row">
				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Categorieen</h3>
						</div>
						<ul class="list-group">
							<li class="list-group-item active-link"><a href="#">Alle
									artikelen</a></li>
									
							<?php
							
							$items = $db->queryArray ( "SELECT * FROM categorie ORDER BY naam", 'Categorie' );
							
							foreach ( $items as $category ) {
								$naam = $category->getNaam ();
								$id = $category->getId ();
								echo "\t\t\t\t<li class=\"list-group-item\"><a href=\"producten.php?categorie=$id\">$naam</a></li>\n";
							}
							
							?>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
							<?php
							echo ($search_category ? $search_category->getNaam () : "Producten");
							?>
							</h3>
						</div>
						<div class="panel-body">
						
						<?php
						if ($search_category) {
							$producten = $db->queryArray ( "SELECT * FROM product WHERE categorie_id='" . $db->escape ( $search_category->getId () ) . "'", 'Product' );
							
							foreach ( $producten as $product ) {
								?>
								<div class="row">
								<div class="col-md-8">
									<div class="media">
										<div class="media-left media-middle">
											<img class="media-object" src="assets/images/auction.png"
												alt="auction">
										</div>
										<div class="media-body">
											<h4 class="media-heading"><?php echo '<a href="product_details.php?product_id=' . $product->getId() . '">' . $product->getProductNaam() . '</a>'; ?></h4>
											<?php echo $product->getBeschrijving(); ?>
										</div>
									</div>
								</div>
								<div class="col-md-4 auctions">Prijs &euro; <?php echo $product->getPrijs(); ?></div>
							</div>
							<?php
								
								if ($product !== end ( $producten )) {
									echo "<hr/>";
								}
							}
						}
						
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			
		
	<?php include 'footer.php'; ?>
		
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>