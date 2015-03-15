<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-15 02:28:51
         compiled from "app\view\cms\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195455504cd4f463da7-69990634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46b9477e7fa778a07d8c0d36a85f4a666371bd7' => 
    array (
      0 => 'app\\view\\cms\\index.tpl',
      1 => 1426382929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195455504cd4f463da7-69990634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5504cd4f496d21_89475191',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5504cd4f496d21_89475191')) {function content_5504cd4f496d21_89475191($_smarty_tpl) {?><div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading text-centered">
			  		<img src="/assets/images/logo.png" class="img-responsive center" width="250" height="30" alt="logo" />
			    	<h3 class="panel-title">CMS</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action="/cms/dashboard" method="post" accept-charset="UTF-8" role="form">
	                    <fieldset>
				    	  	<div class="form-group">
				    		    <input class="form-control" placeholder="Gebruikersnaam" name="username" type="text" required>
				    		</div>
				    		<div class="form-group">
				    			<input class="form-control" placeholder="Wachtwoord" name="password" type="password" required>
				    		</div>
				    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
				    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div><?php }} ?>
