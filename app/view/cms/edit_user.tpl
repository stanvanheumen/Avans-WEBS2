<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Gebruiker wijzigen</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/edit_user_post?id={$user->getId()}" method="post" role="form">
						<fieldset>
							<div class="form-group">
								<span class="label label-default">Persoonlijke gegevens</span>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label>Voornaam</label>
										<input class="form-control" value="{$user->getVoornaam()}" placeholder="Voornaam" name="first_name" type="text" required>
									</div>
									<div class="col-md-4">
										<label>Tussenvoegsel</label>
										<input class="form-control" value="{$user->getTussenvoegsel()}" placeholder="Tussenvoegsel" name="infix_name" type="text">
									</div>
									<div class="col-md-4">
										<label>Achternaam</label>
										<input class="form-control" value="{$user->getAchternaam()}" placeholder="Achternaam" name="last_name" type="text" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Straat</label>
										<input class="form-control" value="{$user->getStraat()}" placeholder="Straat" name="street" type="text" required>
									</div>
									<div class="col-md-6">
										<label>Postcode</label>
										<input class="form-control" value="{$user->getPostcode()}" placeholder="Postcode" name="postal_code" type="text" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Woonplaats</label>
								<input class="form-control" value="{$user->getWoonplaats()}" placeholder="Woonplaats" name="place" type="text" required>
							</div>
							<div class="form-group">
								<label>Telefoonnummer</label>
								<input class="form-control" value="{$user->getTelefoonnummer()}" placeholder="Telefoonnummer" name="number" type="text" required>
							</div>
							<div class="form-group">
								<label>Geslacht</label>
								<select class="form-control" name="gender">
									{foreach $genders as $gender}
									{if $user->getGeslacht() eq $gender.id}
									<option value="{$gender.id}" selected>{$gender.gender}</option>
									{else}
									<option value="{$gender.id}">{$gender.gender}</option>
									{/if}
								{/foreach}
								</select>
							</div>
							<div class="form-group">
								<span class="label label-default">Admin gegevens</span>
							</div>
							<div class="form-group">
								<label>Rank</label>
								<select class="form-control" name="rank">
									{foreach $ranks as $rank}
									{if $rank->getNaam() eq $user->getRankNaam()}
									<option value="{$rank->getNaam()}" selected>{$rank->getNaam()}</option>
									{else}
									<option value="{$rank->getNaam()}">{$rank->getNaam()}</option>
									{/if}
								{/foreach}
								</select>
							</div>
							<div class="pull-right">
								<button type="submit" class="btn btn-default">Wijzigen</button>
								<a href="/cms/users" class="btn btn-default">Annuleren</a>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>