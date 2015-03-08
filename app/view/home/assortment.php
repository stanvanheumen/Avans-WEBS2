<?php
	require_once ('app/model/database.php');
	require_once ('app/model/categorie.inc.php');
	require_once ('app/model/product.inc.php');
	
	$db = new db();
	$db->connect();
	
	$search_category = false;
	
	if (isset($_GET['categorie']) && is_numeric($_GET['categorie'])) {
		$search_category = $db->queryObject("SELECT * FROM categorie WHERE id='" . $db->escape($_GET['categorie']) . "'", 'Categorie');
	}
	
	session_start();
	$_SESSION['title'] = 'Assortiment';
	require_once 'app/view/partial/header.php'; 
?>


<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3 class="panel-title">Assortiment</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Categorie&euml;n</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item active-link"><a href="#">Alle
							artikelen</a></li>
							
					<?php
					
					$items = $db->queryArray ( "SELECT * FROM categorie ORDER BY naam", 'Categorie' );
					
					foreach ( $items as $category ) {
						$naam = $category->getNaam ();
						$id = $category->getId ();
						echo "\t\t\t\t<li class=\"list-group-item\"><a href=\"assortment?categorie=$id\">$naam</a></li>\n";
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
									<img class="media-object" src="../assets/images/auction.png"
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

<?php 
	require_once 'app/view/partial/footer.php';
?>