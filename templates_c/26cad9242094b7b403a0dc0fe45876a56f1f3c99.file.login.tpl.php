<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-27 10:55:30
         compiled from "app\view\home\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56575505b3213f8b89-62059752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cad9242094b7b403a0dc0fe45876a56f1f3c99' => 
    array (
      0 => 'app\\view\\home\\login.tpl',
      1 => 1427450123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56575505b3213f8b89-62059752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5505b321428ad6_83981012',
  'variables' => 
  array (
    'authenticate_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5505b321428ad6_83981012')) {function content_5505b321428ad6_83981012($_smarty_tpl) {?><div class="container">
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
