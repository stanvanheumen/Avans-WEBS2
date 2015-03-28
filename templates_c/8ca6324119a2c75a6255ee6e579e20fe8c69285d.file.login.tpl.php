<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 18:03:24
         compiled from "app\view\home\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277625515a4a6dd1bf0-96904499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca6324119a2c75a6255ee6e579e20fe8c69285d' => 
    array (
      0 => 'app\\view\\home\\login.tpl',
      1 => 1427562190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277625515a4a6dd1bf0-96904499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515a4a6e02936_58132101',
  'variables' => 
  array (
    'authenticate_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515a4a6e02936_58132101')) {function content_5515a4a6e02936_58132101($_smarty_tpl) {?><div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Inloggen</h3>
			</div>
			<div class="panel-body">
				<?php if (isset($_smarty_tpl->tpl_vars['authenticate_error']->value)) {?>
				<div class="alert alert-danger" role="alert">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					Verkeerde gebruikersnaam/wachtwoord
				</div>
				<?php }?>
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
</div><?php }} ?>
