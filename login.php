<?php 
	session_start();
	$_SESSION['title'] = 'Inloggen';
	require_once 'inc/template/header.php';
?>
		
<div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Inloggen</h3>
			</div>
			<div class="panel-body">

				<form action="account.php" accept-charset="UTF-8" role="form">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="E-mail"
								name="email" type="text" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Wachtwoord"
								name="password" type="password" value="">
						</div>
						<input class="btn btn-lg btn-success btn-block" type="submit"
							value="Inloggen">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
		
<?php 
	require_once 'inc/template/footer.php'; 
?>