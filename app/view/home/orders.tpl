<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="panel-title">Bestellingen</span>
				</div>
				{if empty($orderproducts) }
				<div class="panel-body">
					<p>Je hebt nog geen bestellingen geplaatst.</p>
				</div>
				{else}
				<table class="table table-bordered">
					{foreach $orderproducts as $order}
					<tr>
					<td>
					{foreach $order as $product}
					<div class="row">
						<div class="col-md-3">
							<div class="orders">
								<img src="/uploads/{$product[0]->getProductId()}_1.png" class="img-responsive center-block" alt="-" />
							</div>
						</div>
						<div class="col-md-6">
							<h5>{$product[1]->getProductNaam()}</h5>
						</div>
						<div class="col-md-3">
							<div class="price">
								<span>&euro;</span>{$product[0]->getEuros()}<span class="cents">.{$product[0]->getCents()}</span>
							</div>x{$product[0]->getAantal()}
						</div>
					</div>
					{/foreach}
					</td>
					</tr>
					{/foreach}
				</table>
				{/if}
			</div>
		</div>
	</div>
</div>