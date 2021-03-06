<div class="container">
	<div class="row cms vertical-offset-20">
	</div>
	<div class="row cms">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Bestellingen</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-2">Id</th>
						<th class="col-md-8">E-mail</th>
						<th class="col-md-2">Opties</th>
					</tr>
					{foreach $orders as $order}
					<tr>
						<td class="col-md-2">{$order->getId()}</td>
						{foreach $accounts as $account}
						{if $account->getId() eq $order->getAccountId()}
						<td class="col-md-8">
							{$account->getGebruikersnaam()}	
						</td>
						{/if}
						{/foreach}
						<td class="col-md-2 text-centered">
							<a href="/cms/read_bestelling?id={$order->getId()}" class="btn btn-primary"><span class="glyphicon glyphicon-sunglasses"></span></a>
							<a onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?');" class="btn btn-danger" href="/cms/delete_bestelling?id={$order->getId()}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
	</div>
</div>