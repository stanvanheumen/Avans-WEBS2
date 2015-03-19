<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-17 13:34:34
         compiled from "app\view\home\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:464155081f5a635750-78177109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154d612b83be8baedc3fede925d99647ed8df2e9' => 
    array (
      0 => 'app\\view\\home\\login.tpl',
      1 => 1426595576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '464155081f5a635750-78177109',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55081f5a7c4ed3_85061408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55081f5a7c4ed3_85061408')) {function content_55081f5a7c4ed3_85061408($_smarty_tpl) {?><div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Inloggen</h3>
			</div>
			<div class="panel-body">
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
