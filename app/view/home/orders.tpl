<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="panel-title">Bestellingen</span>
				</div>
				<table class="table table-bordered">
					{foreach $orderproducts as $order}
					<tr>
					<td>
					{foreach $order as $product}
					<div class="row">
						<div class="col-md-2">
							<div class="orders">
								<img src="/uploads/{$product[0]->getProductId()}_1.png" class="img-responsive center-block" alt="-" />
							</div>
						</div>
						<div class="col-md-3">
							<h4>{$product[1]->getProductNaam()}</h4>
						</div>
						<div class="col-md-3">
							<span class="search-title">&euro;{$product[0]->getPrijs()}</span>
						</div>
						<div class="col-md-4">
							<span class="search-title">x{$product[0]->getAantal()}</span>
						</div>
					</div>
					{/foreach}
					</td>
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
	</div>
</div>