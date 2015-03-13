<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 14:09:16
         compiled from "app\view\partial\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2558555018e17853cc5-24849899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db07f4c8eab7cb3e96c35468fba268971bf946a7' => 
    array (
      0 => 'app\\view\\partial\\footer.tpl',
      1 => 1426165754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2558555018e17853cc5-24849899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55018e1786bf90_48906030',
  'variables' => 
  array (
    'year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55018e1786bf90_48906030')) {function content_55018e1786bf90_48906030($_smarty_tpl) {?>		<!-- main-footer -->
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
					<a href="/home/index"><img src="/assets/images/logo.png" class="img-responsive center-img" width="235" height="46" alt="logo" /></a>
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
 src="/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
