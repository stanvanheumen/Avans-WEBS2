<div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Inloggen</h3>
			</div>
			<div class="panel-body">
				{if isset($authenticate_error)}
				<div class="alert alert-danger" role="alert">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					Verkeerde gebruikersnaam/wachtwoord
				</div>
				{/if}
				<form action="/home/login_post" method="post" accept-charset="UTF-8" role="form">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="E-mail" name="email" type="text" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Wachtwoord" name="password" type="password" required>
						</div>
						<input class="btn btn-lg btn-success btn-block" type="submit" value="Inloggen">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>