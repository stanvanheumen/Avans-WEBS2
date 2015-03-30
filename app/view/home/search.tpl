<div class="custom-container content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">{$amount} resultaten gevonden voor '{$searchquery}'</h3>
					</div>
					<table class="table table-bordered">	
						{foreach $products as $product} 
						<tr>
							<td>
								<div class="col-md-5">
									<div class="media">
										<div class="col-md-3">
											<div class="orders">
												<img class="img-responsive" src="/uploads/{$product->getId()}_1.png" alt="auction">
											</div>
										</div>
										<div class="col-md-9">
											<div class="media-body">
												<h4 class="media-heading"><a href="productdetails?product_id={$product->getId()}">{$product->getProductNaam()}</a></h4>
												{$product->getBeschrijvingKort()}
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3 auctions">
									<div class="price">
										<span>&euro;</span>{$product->getEuros()}<span class="cents">.{$product->getCents()}</span>
									</div>
								</div>
								<div class="col-md-4">
									{if isset($smarty.session.home_authenticated) && $smarty.session.home_authenticated == 1}
									{if isset($smarty.session.shoppingcart) && in_array($product->getId(), $smarty.session.shoppingcart)} 
									<a href="/home/removefromcart?id={$product->getId()}" class="btn btn-danger">Verwijderen van winkelwagentje</a>
									{else}
									<form action="/home/addtocart" method="post" role="form">
										<input type="hidden" name="value" value="{$product->getId()}" />
										<button type="submit" class="btn btn-success">Toevoegen aan winkelwagentje</button>
									</form>
									{/if}
									{/if}
								</div>
							</td>
						</tr>
						{/foreach} 
					</table>
				</div>
			</div>
		</div>
	</div>
</div>