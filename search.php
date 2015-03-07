<?php 
	require_once ('inc/database.php');
	require_once ('model/categorie.inc.php');
	require_once ('model/product.inc.php');
	
	$db = new db();
	$db->connect();
	
	$search_category = false;
	
	if (isset($_GET ['categorie']) && is_numeric ($_GET['categorie'])) {
		$search_category = $db->queryObject("SELECT * FROM categorie WHERE id='" . $db->escape($_GET['categorie']) . "'", 'Categorie' );
	}
	
	$producten = $db->queryArray("SELECT * FROM product WHERE productnaam LIKE '%" . $db->escape($_GET['search-query']) . "%'", 'Product');

	session_start();
	$_SESSION['title'] = 'Zoeken';
	require_once 'inc/template/header.php';
?>
<div class="custom-container content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="panel-title"><?php echo count($producten); ?> resultaten gevonden voor '<?php echo $_GET['search-query']; ?>' in Alle artikelen</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Categorie&euml;n</h3>
					</div>
					<ul class="list-group">
						<li class="list-group-item active-link"><a href="#">Alle artikelen</a></li>
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
						<h3 class="panel-title">Resultaten</h3>
					</div>
					<div class="panel-body">
						<?php						
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
						?>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'inc/template/footer.php'; ?>