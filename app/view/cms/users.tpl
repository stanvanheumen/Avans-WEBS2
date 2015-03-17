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
					<h4 class="panel-title">Gebruikers</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-3">E-mail</th>
						<th class="col-md-3">Naam</th>
						<th class="col-md-3">Adres</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					{foreach $users as $user}
					<tr>
						<td class="col-md-3">{$user->getGebruikersnaam()}</td>
						<td class="col-md-3">{$user->getNaam()}</td>
						<td class="col-md-3">{$user->getAdres()}</td>
						<td class="col-md-2 text-centered">
							<a class="btn btn-warning" href="/cms/edit_user?id={$user->getId()}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a class="btn btn-danger" href="/cms/delete_user?id={$user->getId()}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
	</div>
</div>