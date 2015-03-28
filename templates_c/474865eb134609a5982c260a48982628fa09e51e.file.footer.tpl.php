<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 23:53:33
         compiled from "app\view\home\partial\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:837055157dd164e689-58379408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '474865eb134609a5982c260a48982628fa09e51e' => 
    array (
      0 => 'app\\view\\home\\partial\\footer.tpl',
      1 => 1427583201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '837055157dd164e689-58379408',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55157dd1657269_16033627',
  'variables' => 
  array (
    'year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55157dd1657269_16033627')) {function content_55157dd1657269_16033627($_smarty_tpl) {?>		<div class="container">
			<!-- main-footer -->
			<nav class="navbar navbar-default border-none">
				<div class="col-lg-12 ">
					<div class="col-md-4">
						<h4>Klantenservice</h4>
						<ul>
							<li><a href="/home/about">Over ons</a></li>
							<li><a href="/home/sitemap">Sitemap</a></li>
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
							<li><a href="/home/compareproduct">Productvergelijker</a></li>
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
					<p>
						<a href="http://jigsaw.w3.org/css-validator/check/referer">
							<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valide CSS!" />
						</a>
					</p>
					<div class="col-md-12">
						<p>
							Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 Brian van den Broek en Stan van Heumen.
						</p>
					</div>
				</div>
			</div>
			<!-- /logo-footer -->
		</div>
		
		<?php echo '<script'; ?>
 src="/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/assets/js/jquery.fancybox.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/assets/js/webshop.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
