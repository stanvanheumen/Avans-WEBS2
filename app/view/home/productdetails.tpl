<div class="container">
	<h1>{$product->getProductNaam()}</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="col-md-8">
				<a class="fancybox" href="/{$thumbnail->getLink()}" rel="lightbox">
					<div class="panel panel-primary">
						<div class="panel-body product-thumbnail">
							<img src="/{$thumbnail->getLink()}" class="img-responsive center-block" alt="img">
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				{foreach $product_afbeeldingen as $afbeelding}
				<a class="fancybox" href="/{$afbeelding->getLink()}" rel="lightbox">
					<div class="panel panel-primary pull-left">
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
	<div class="row">
		{foreach $reviews as $review}
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span class="panel-title">Review door {$review->getVoornaam()} op {$review->getDatum()}</span>
					</div>
					<div class="panel-body">
						{$review->getBericht()}
					</div>
				</div>
			</div>
		</div>
		{/foreach}
		{if isset($smarty.session.home_authenticated) && $smarty.session.home_authenticated == 1}
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span class="panel-title">Schrijf een review</span>
					</div>
					<div class="panel-body">
						<form action="/home/postreview?id={$product->getId()}" method="post" role="form" enctype="multipart/form-data">
							<div class="form-group">
								<textarea class="form-control" id="review" name="review" placeholder="Type je review..." required></textarea>
							</div>
							<div class="pull-right">
								<button type="submit" class="btn btn-primary">Plaatsen</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		{/if}
	</div>
</div>