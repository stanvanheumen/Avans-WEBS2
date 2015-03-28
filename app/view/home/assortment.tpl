<div class="container">
	<div class="row">
		<div class="col-sm-3">
			{if isset($sub_categories)}
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Subcategorie&euml;n</h3>
				</div>
				<ul class="list-group">
					{foreach $sub_categories as $cat} 
						{if isset($currcategory) && $cat->getId() eq $currcategory}
							<li class="list-group-item cat-active">{$cat->getNaam()}</li>
						{else}
							<li class="list-group-item"><a href="?categorie={$cat->getId()}">{$cat->getNaam()}</a></li>
						{/if}
					{/foreach} 
				</ul>
			</div>
			{/if}
		
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Categorie&euml;n</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item active-link"><a href="?categorie=-1">Alle artikelen</a></li>		
					{foreach $assort_categories as $cat} 
						{if isset($currcategory) && $cat->getId() eq $currcategory}
							<li class="list-group-item cat-active">{$cat->getNaam()}</li>
						{else}
							<li class="list-group-item"><a href="?categorie={$cat->getId()}">{$cat->getNaam()}</a></li>
						{/if}
					{/foreach} 
				</ul>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-primary">
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
								<div class="orders">
									<img class="img-responsive" src="/uploads/{$product->getId()}_1.png" alt="auction">
								</div>
								<div class="media-body">
									<h4 class="media-heading"><a href="productdetails?product_id={$product->getId()}">{$product->getProductNaam()}</a></h4>
									{$product->getBeschrijving()}
								</div>
							</div>
						</div>
						<div class="col-md-2 auctions">Prijs &euro; {$product->getPrijs()}</div>
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