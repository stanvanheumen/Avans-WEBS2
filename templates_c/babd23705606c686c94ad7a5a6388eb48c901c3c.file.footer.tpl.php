<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 13:54:55
         compiled from "app\view\partial\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:445455018c9ff00a83-93153799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'babd23705606c686c94ad7a5a6388eb48c901c3c' => 
    array (
      0 => 'app\\view\\partial\\footer.tpl',
      1 => 1426164837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '445455018c9ff00a83-93153799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'year' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55018c9ff31227_18868068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55018c9ff31227_18868068')) {function content_55018c9ff31227_18868068($_smarty_tpl) {?>		<!-- main-footer -->
		<div class="container">
			<nav class="navbar navbar-default sm-vpadding">
			   	<div class="col-lg-12 ">
			   		<div class="col-md-4">
				      	<h4 class="no-margin">Klantenservice</h4>
			        	<ul>
			          		<li><a href="about">Over ons</a></li>
			          		<li><a href="about">Veelgestelde vragen</a></li>
			        	</ul>
			      	</div>  
		     		<div class="col-md-4">
				      	<h4 class="no-margin">Contactgegevens</h4>
			        	<ul>
			          		<li>bcf.vandenbroek@student.avans.nl</li>
			          		<li>cjg.vanheumen@student.avans.nl</li>
			        	</ul>
			      	</div>  
			      	<div class="col-md-4">
				      	<h4 class="no-margin">WebShop</h4>
			        	<ul>
			          		<li><a href="about">Over WebShop</a></li>
			          		<li><a href="about">Cadeaubonnen</a></li>
			        	</ul>
			      	</div>  
		   		</div>
			</nav>
		</div>
		<!-- /main-footer -->
		
		<!-- logo-footer -->
		<div class="container custom-footer">
			<div class="row">
				<div class="col-md-12">
					<a href="index.php"><img src="/assets/images/logo.png" class="img-responsive center-img" width="235" height="46" alt="logo" /></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p>
						Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 Brian van den Broek en Stan van Heumen.
					</p>
				</div>
			</div>
		</div>
		<!-- /logo-footer -->
		
		<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
