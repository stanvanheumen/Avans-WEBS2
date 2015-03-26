<div class="container">
	<h1>{$product->getProductNaam()}</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="col-md-8">
				<a class="fancybox" href="/{$thumbnail->getLink()}" rel="lightbox">
					<div class="panel panel-default">
						<div class="panel-body product-thumbnail">
							<img src="/{$thumbnail->getLink()}" class="img-responsive center-block" alt="img">
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				{foreach $product_afbeeldingen as $afbeelding}
				<a class="fancybox" href="/{$afbeelding->getLink()}" rel="lightbox">
					<div class="panel panel-default pull-left">
						<div class="panel-body product-image">
							<img src="/{$afbeelding->getLink()}" class="img-responsive center-block" alt="img">
						</div>
					</div>
				</a>
				{/foreach}
			</div>
		</div>
		<div class="col-md-8">
			<table class="table">
				<tr>
					<td>Productnaam<td>
					<td>{$product->getProductNaam()}</td>
				</tr>
				<tr>
					<td>Beschrijving<td>
					<td>{$product->getBeschrijving()}</td>
				</tr>
				<tr>
					<td>Prijs<td>
					<td>&euro; {$product->getPrijs()}</td>
				</tr>
				<tr>
					<td>Op voorraad<td>
					<td> 
					{if $product->getVoorraad() > 0}
					Ja
					{else}
					Nee
					{/if}
					</td>
				</tr>
				<tr>
					<td><td>
					<td>
						{if isset($smarty.session.home_authenticated) && $smarty.session.home_authenticated == 1}
						{if isset($in_shopping_cart) }
						<a href="/home/removefromcart?id={$product->getId()}" class="btn btn-danger">Verwijderen van winkelwagentje</a>
						{else}
						<form action="/home/addtocart" method="post" role="form">
							<input type="hidden" name="value" value="{$product->getId()}" />
							<button type="submit" class="btn btn-success">Toevoegen aan winkelwagentje</button>
						</form>
						{/if}
						{/if}
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>