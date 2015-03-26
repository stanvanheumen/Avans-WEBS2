<div class="container">
	<div class="row cms">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Gebruiker</h4>
				</div>
				<div class="panel-body">
					<fieldset>
						<div class="form-group">
							<span class="label label-default">Persoonlijke gegevens</span>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Voornaam</label><br />
									{$user->getVoornaam()}
								</div>
								<div class="col-md-4">
									<label>Tussenvoegsel</label><br />
									{$user->getTussenvoegsel()}
								</div>
								<div class="col-md-4">
									<label>Achternaam</label><br />
									{$user->getAchternaam()}
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Straat</label><br />
									{$user->getStraat()}
								</div>
								<div class="col-md-4">
									<label>Postcode</label><br />
									{$user->getPostcode()}
								</div>
								<div class="col-md-4">
									<label>Woonplaats</label><br />
									{$user->getWoonplaats()}
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Telefoonnummer</label><br />
							{$user->getTelefoonnummer()}
						</div>
						<div class="pull-right">
							<a class="btn btn-primary" href="/cms/users"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
						</div>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>