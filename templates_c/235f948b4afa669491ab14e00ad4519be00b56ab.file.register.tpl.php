<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-14 17:43:09
         compiled from "app\view\home\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2322355045d6777a904-94193311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '235f948b4afa669491ab14e00ad4519be00b56ab' => 
    array (
      0 => 'app\\view\\home\\register.tpl',
      1 => 1426351387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2322355045d6777a904-94193311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55045d677c7c34_43307672',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55045d677c7c34_43307672')) {function content_55045d677c7c34_43307672($_smarty_tpl) {?><div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Registreren</h3>
			</div>
			<div class="panel-body">
				<form action="account.php" accept-charset="UTF-8" role="form">
					<fieldset>
						<div class="form-group">
							<span class="label label-default">Persoonlijke gegevens</span>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<input class="form-control" placeholder="Voornaam" name="first_name" type="text" required>
								</div>
								<div class="col-md-4">
									<input class="form-control" placeholder="Tussenvoegsel" name="infix_name" type="text">
								</div>
								<div class="col-md-4">
									<input class="form-control" placeholder="Achternaam" name="last_name" type="text">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input class="form-control" placeholder="Straat"
										name="street" type="text">
								</div>
								<div class="col-md-3">
									<input class="form-control" placeholder="Postcode"
										name="postal_code" type="text">
								</div>
								<div class="col-md-3">
									<input class="form-control" placeholder="Huisnr"
										name="house_number" type="text">
								</div>
							</div>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Woonplaats"
								name="place" type="text" value="">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Telefoonnummer"
								name="place" type="text" value="">
						</div>
						<div class="form-group">
							<select class="form-control" name="Geslacht">
								<option value="man">Man</option>
								<option value="vrouw">Vrouw</option>
								<option value="unknown">Ik weet het niet/beide</option>
							</select>
						</div>
						<div class="form-group">
							<span class="label label-default">Login gegevens</span>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="E-mail"
								name="email" type="text" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Wachtwoord"
								name="password" type="password" value="">
						</div>
						<input class="btn btn-lg btn-blue btn-block" type="submit"
							value="Registreren">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>
