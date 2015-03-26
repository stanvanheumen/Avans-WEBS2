<div class="container">
	<div class="row cms vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-primary" href="/cms/orders"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row cms">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Bestelling</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-5">Naam</th>
						<th class="col-md-4">Prijs</th>
						<th class="col-md-3">Hoeveelheid</th>
					</tr>
					{foreach $orderedproducts as $o_product}
					<tr>
						{foreach $products as $product}
						{if $o_product->getProductId() eq $product->getId()}
						<td class="col-md-5">
							{$product->getProductNaam()}	
						</td>
						<td class="col-md-5">
							&euro; {$o_product->getPrijs()}	
						</td>
						<td class="col-md-5">
							{$o_product->getAantal()}	
						</td>
						{/if}
						{/foreach}
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
	</div>
</div>