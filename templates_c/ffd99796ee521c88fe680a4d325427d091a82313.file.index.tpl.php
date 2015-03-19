<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-19 10:03:26
         compiled from "app\view\cms\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28035506b8ab2c5304-39722742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd99796ee521c88fe680a4d325427d091a82313' => 
    array (
      0 => 'app\\view\\cms\\index.tpl',
      1 => 1426755802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28035506b8ab2c5304-39722742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5506b8ab2c8e35_96656049',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5506b8ab2c8e35_96656049')) {function content_5506b8ab2c8e35_96656049($_smarty_tpl) {?><div class="container">
    <div class="row vertical-offset-100">
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
				    		    <input class="form-control" placeholder="E-mail" name="email" type="text" required>
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
