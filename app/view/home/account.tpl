<div class="container">
	<form action="/home/pay" method="post" role="form">
		<table id="cart" class="table table-hover table-condensed">
			<thead>
				<tr>
					<th style="width:50%">Product</th>
					<th style="width:10%">Prijs</th>
					<th style="width:8%">Hoeveelheid</th>
					<th style="width:22%" class="text-center">Subtotaal</th>
					<th style="width:10%"></th>
				</tr>
			</thead>
			<tbody>
				{foreach $products as $product}
				<tr>
					<td data-th="Product">
						<div class="row">
							<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
							<div class="col-sm-10">
								<h4 class="nomargin">{$product->getProductNaam()}</h4>
								<p>{$product->getBeschrijvingKort()}</p>
							</div>
						</div>
					</td>
					<td data-th="Price">&euro; {$product->getPrijs()}</td>
					<td data-th="Quantity">
						<input type="number" min="1" name="{$product->getId()}" id="input{$product->getId()}" onchange="update({$product->getId()}, {$product->getPrijs()})" class="form-control text-center" value="1">
					</td>
					<td data-th="Subtotal" data-price="{$product->getPrijs()}" id="{$product->getId()}" class="product-price text-center">&euro; {$product->getPrijs()}</td>
					<td class="actions">
						<a href="/home/removefromcart?id={$product->getId()}" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>								
					</td>
				</tr>
				{/foreach}
			</tbody>
			<tfoot>
				<tr>
					<td><a href="/home/index" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i>Ga door met winkelen</a></td>
					<td colspan="2" class="hidden-xs"></td>
					<td class="hidden-xs text-center total-price"></td>
					<td><button type="submit" class="btn btn-success btn-block">Betalen <i class="glyphicon glyphicon-chevron-right"></i></button></td>
				</tr>
			</tfoot>
		</table>
	</form>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="panel-title">Bestellingen</span>
				</div>
				<div class="panel-body">
					{foreach $orderedProducts as $order}
					<div class="row">
						<div class="col-md-2">
							<img src="/uploads/{$order->getProductId()}_1.png" class="img-responsive center-block" alt="-" />
						</div>
						<span class="search-title">&euro;{$order->getPrijs()}</span>
						<span class="panel-title">x{$order->getAantal()}</span>
					</div>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>