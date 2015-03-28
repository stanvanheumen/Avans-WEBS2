<div class="custom-container content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">{$amount} resultaten gevonden voor '{$searchquery}'</h3>
					</div>
					<div class="panel-body">	
						{foreach $products as $product} 			
						<div class="row vertical-offset-7">
							<div class="col-md-6">
								<div class="media">
									<div class="col-md-6">
										<div class="panel-body featured">
											{foreach $product_images as $afbeelding}
												{if $product->getId() eq $afbeelding->getProductId()}
												<img class="img-responsive center-block" src="/{$afbeelding->getLink()}" alt="auction">
												{/if}
											{/foreach}
										</div>
									</div>
									<div class="media-body">
										<h4 class="media-heading"><a href="productdetails?product_id={$product->getId()}">{$product->getProductNaam()}</a></h4>
										{$product->getBeschrijving()}
									</div>
								</div>
							</div>
							<div class="col-md-3 auctions"><span class="search-title">&euro; {$product->getPrijs()}</span></div>
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