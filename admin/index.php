<!DOCTYPE html>
<html lang="nl">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Groep L">
<title>Home</title>
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
		<?php include '../header.php'; ?>
		
		<div class="custom-container content">
		<div class="container">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Login</h3>
					</div>
					<div class="panel-body">
						<form action="account.php" accept-charset="UTF-8" role="form">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Gebruikersnaam"
										name="username" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Wachtwoord"
										name="password" type="password" value="">
								</div>
								<input class="btn btn-lg btn-success btn-block" type="submit"
									value="Login">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<?php include '../footer.php'; ?>
		
		<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
