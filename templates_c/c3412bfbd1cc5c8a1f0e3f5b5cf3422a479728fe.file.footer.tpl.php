<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-14 00:25:42
         compiled from "app\view\partial\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46015501dc8d493117-43279996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3412bfbd1cc5c8a1f0e3f5b5cf3422a479728fe' => 
    array (
      0 => 'app\\view\\partial\\footer.tpl',
      1 => 1426288972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46015501dc8d493117-43279996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501dc8d49b584_65293748',
  'variables' => 
  array (
    'year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501dc8d49b584_65293748')) {function content_5501dc8d49b584_65293748($_smarty_tpl) {?>		<div class="container">
			<!-- main-footer -->
			<nav class="navbar navbar-default">
			   	<div class="col-lg-12 ">
			   		<div class="col-md-4">
				      	<h4>Klantenservice</h4>
			        	<ul>
			          		<li><a href="/home/about">Over ons</a></li>
			          		<li><a href="/home/about">Veelgestelde vragen</a></li>
			        	</ul>
			      	</div>  
		     		<div class="col-md-4">
				      	<h4>Contactgegevens</h4>
			        	<ul>
			          		<li>bcf.vandenbroek@student.avans.nl</li>
			          		<li>cjg.vanheumen@student.avans.nl</li>
			        	</ul>
			      	</div>  
			      	<div class="col-md-4">
				      	<h4>WebShop</h4>
			        	<ul>
			          		<li><a href="/home/about">Over WebShop</a></li>
			          		<li><a href="/home/about">Cadeaubonnen</a></li>
			        	</ul>
			      	</div>  
		   		</div>
			</nav>
			<!-- /main-footer -->
		
			<!-- logo-footer -->
			<div class="custom-footer">
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
