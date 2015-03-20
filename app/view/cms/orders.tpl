<div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-blue" href="/cms/"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Bestellingen</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-8">Id</th>
						<th class="col-md-2">Betaalmethode</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					{foreach $orders as $order}
					<tr>
						<td class="col-md-8">{$order->getId()}</td>
						<td class="col-md-2">&euro; {$order->getBetaalMethodeId()}</td>
						<td class="col-md-2 text-centered">
							<a class="btn btn-warning" href="/cms/edit_order?id={$order->getId()}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a class="btn btn-danger" href="/cms/delete_order?id={$order->getId()}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
	</div>
</div>