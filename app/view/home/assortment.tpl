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
					<li class="list-group-item active-link"><a href="#">Alle artikelen</a></li>		
					{foreach $categories as $cat} 
						{if $cat->getId() eq $currcategory}
							<li class="list-group-item cat-active"><a href="?categorie={$cat->getId()}">{$cat->getNaam()}</a></li>
						{else}
							<li class="list-group-item"><a href="?categorie={$cat->getId()}">{$cat->getNaam()}</a></li>
						{/if}
					{/foreach} 
				</ul>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						{$category}
					</h3>
				</div>
				<div class="panel-body">
				{if isset($products)}
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
						<div class="col-md-2 auctions">Prijs &euro; {$product->getPrijs()}</div>
						<div class="col-md-4">
							<form action="/home/addtocart" method="post" role="form">
								<input type="hidden" name="value" value="{$product->getId()}" />
								<button type="submit" class="btn btn-success">Toevoegen aan winkelwagentje</button>
							</form>
						</div>
					</div>
					{if $last_product != $product}
					<hr/>
					{/if}
					{/foreach} 
					{/if}
				</div>
			</div>
		</div>
	</div>
</div>