<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 22:32:32
         compiled from "app\view\home\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1488555045d314fda90-26062198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca6324119a2c75a6255ee6e579e20fe8c69285d' => 
    array (
      0 => 'app\\view\\home\\login.tpl',
      1 => 1426541542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1488555045d314fda90-26062198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55045d3153dd20_20502558',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55045d3153dd20_20502558')) {function content_55045d3153dd20_20502558($_smarty_tpl) {?><div class="container">
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
