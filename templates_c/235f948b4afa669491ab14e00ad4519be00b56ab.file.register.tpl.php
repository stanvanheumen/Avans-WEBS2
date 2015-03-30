<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-30 19:45:44
         compiled from "app\view\home\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123575516ec85955336-80581281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '235f948b4afa669491ab14e00ad4519be00b56ab' => 
    array (
      0 => 'app\\view\\home\\register.tpl',
      1 => 1427737511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123575516ec85955336-80581281',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5516ec859ab509_28896197',
  'variables' => 
  array (
    'authenticate_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5516ec859ab509_28896197')) {function content_5516ec859ab509_28896197($_smarty_tpl) {?><div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Registreren</h3>
			</div>
			<div class="panel-body">
				<?php if (isset($_smarty_tpl->tpl_vars['authenticate_error']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['authenticate_error']->value==1) {?>
				<div class="alert alert-danger" role="alert">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					De wachtwoorden matchen niet
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php } else { ?>
				<div class="alert alert-danger" role="alert">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					Dit e-mailadres is al geregistreerd
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php }?>
				<?php }?>
				<form action="/home/register_post" method="post" accept-charset="UTF-8" role="form">
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
									<input class="form-control" placeholder="Achternaam" name="last_name" type="text" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input class="form-control" placeholder="Straat" name="street" type="text" required>
								</div>
								<div class="col-md-6">
									<input class="form-control" placeholder="Postcode" name="postal_code" type="text" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Woonplaats" name="place" type="text" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Telefoonnummer" name="number" type="text" required>
						</div>
						<div class="form-group">
							<select class="form-control" name="gender">
								<option value="0">Man</option>
								<option value="1">Vrouw</option>
								<option value="2">Ik weet het niet/beide</option>
							</select>
						</div>
						<div class="form-group">
							<span class="label label-default">Login gegevens</span>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="E-mail" name="email" type="email" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Wachtwoord" name="password" type="password" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Herhaal wachtwoord" name="repeat_password" type="password" required>
						</div>
						<input class="btn btn-lg btn-primary btn-block" type="submit" value="Registreren">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>
