<div class="custom-container content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="panel-title">{$amount} resultaten gevonden voor '{$searchquery}'</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				{foreach $products as $product} 
				<div class="panel panel-default">
					<div class="panel-body">				
						<div class="row">
							<div class="col-md-12">
								<div class="media">
									<div class="media-left media-middle">
										<img class="media-object" src="../assets/images/auction.png" alt="auction">
									</div>
									<div class="media-body">
										<h4 class="media-heading"><a href="productdetails?product_id={$product->getId()}">{$product->getProductNaam()}</a></h4>
										{$product->getBeschrijving()}
									</div>
								</div>
							</div>
							<div class="col-md-4 auctions">Prijs &euro; {$product->getPrijs()}</div>
						</div>
				    </div>
				</div>
				{/foreach}
			</div>
		</div>
	</div>
</div>