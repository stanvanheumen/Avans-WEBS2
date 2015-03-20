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
				<div class="panel panel-default">
					<div class="panel-body">	
						{foreach $products as $product} 			
						<div class="row">
							<div class="col-md-6">
								<div class="media">
									<div class="media-left media-middle">
										<img class="media-object" src="/assets/images/auction.png" alt="auction">
									</div>
									<div class="media-body">
										<h4 class="media-heading"><a href="productdetails?product_id={$product->getId()}">{$product->getProductNaam()}</a></h4>
										{$product->getBeschrijving()}
									</div>
								</div>
							</div>
							<div class="col-md-3 auctions">Prijs &euro; {$product->getPrijs()}</div>
							<div class="col-md-3">
								{if isset($smarty.session.home_authenticated) && $smarty.session.home_authenticated == 1}
								<form action="/home/addtocart" method="post" role="form">
									<input type="hidden" name="value" value="{$product->getId()}" />
									<button type="submit" class="btn btn-success">Toevoegen aan winkelwagentje</button>
								</form>
								{/if}
							</div>
						</div>
						{/foreach}
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>