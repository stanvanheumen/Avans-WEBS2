<div class="container">
	<div class="row cms vertical-offset-20">
	</div>
	<div class="row cms">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Gebruikers</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-3">E-mail</th>
						<th class="col-md-2">Rank</th>
						<th class="col-md-2">Naam</th>
						<th class="col-md-3">Adres</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					{foreach $users as $user}
					<tr>
						<td class="col-md-3">{$user->getGebruikersnaam()}</td>
						<td class="col-md-2">{$user->getRankNaam()}</td>
						<td class="col-md-2">{$user->getNaam()}</td>
						<td class="col-md-3">{$user->getAdres()}</td>
						<td class="col-md-2 text-centered">
							<a href="/cms/read_user?id={$user->getId()}" class="btn btn-primary"><span class="glyphicon glyphicon-sunglasses"></span></a>
							<a class="btn btn-warning" href="/cms/edit_user?id={$user->getId()}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?');" class="btn btn-danger" href="/cms/delete_user?id={$user->getId()}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
	</div>
</div>