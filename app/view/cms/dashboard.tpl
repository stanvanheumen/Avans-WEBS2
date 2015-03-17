<div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-success" href="/cms/create"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
					<a href="/cms/logout" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-off" aria-hidden="true"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Producten</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-8">Naam</th>
						<th class="col-md-2">Prijs</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					{foreach $products as $product}
					<tr>
						<td class="col-md-8">{$product->getProductNaam()}</td>
						<td class="col-md-2">&euro; {$product->getPrijs()}</td>
						<td class="col-md-2 text-centered">
							<a class="btn btn-warning" href="/cms/edit?id={$product->getId()}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a class="btn btn-danger" href="/cms/delete?id={$product->getId()}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
	</div>
</div>