<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-22 11:56:02
         compiled from "app\view\cms\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124615505b3bb11eaa4-07649612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c70603dfdfc765866bcd99f275c551622113b5' => 
    array (
      0 => 'app\\view\\cms\\index.tpl',
      1 => 1427021760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124615505b3bb11eaa4-07649612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5505b3bb121c66_68657649',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5505b3bb121c66_68657649')) {function content_5505b3bb121c66_68657649($_smarty_tpl) {?><div class="container">
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
					<div class="vertical-offset-7">
						<a href="/home/" class="btn btn-primary btn-lg btn-block" role="button">Ga terug</a>
					</div>
			    </div>
			</div>
		</div>
	</div>
</div><?php }} ?>
