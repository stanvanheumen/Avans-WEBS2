<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-29 23:22:27
         compiled from "app\view\cms\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31935515a4b957d996-67652810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46b9477e7fa778a07d8c0d36a85f4a666371bd7' => 
    array (
      0 => 'app\\view\\cms\\index.tpl',
      1 => 1427663949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31935515a4b957d996-67652810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515a4b95808c0_29837565',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515a4b95808c0_29837565')) {function content_5515a4b95808c0_29837565($_smarty_tpl) {?><div class="container">
    <div class="row cms vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading text-centered">
			  		<a href="/home/index"><img src="/assets/images/logo.png" class="img-responsive center" width="250" height="30" alt="logo" /></a>
			    	<h3 class="panel-title">CMS</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action="/cms/index" method="post" accept-charset="UTF-8" role="form">
	                    <fieldset>
				    	  	<div class="form-group">
				    		    <input class="form-control" placeholder="Gebruikersnaam" name="email" type="text" required>
				    		</div>
				    		<div class="form-group">
				    			<input class="form-control" placeholder="Wachtwoord" name="password" type="password" required>
				    		</div>
				    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
				    	</fieldset>
			      	</form>
					<div class="vertical-offset-7">
						<a href="/home/" class="btn btn-primary btn-lg btn-block" role="button">Ga terug</a>
					</div>
			    </div>
			</div>
		</div>
	</div>
</div><?php }} ?>
