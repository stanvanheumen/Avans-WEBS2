<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-23 16:43:46
         compiled from "app\view\home\partial\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116655504cf2876d802-54219077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '474865eb134609a5982c260a48982628fa09e51e' => 
    array (
      0 => 'app\\view\\home\\partial\\footer.tpl',
      1 => 1427111709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116655504cf2876d802-54219077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5504cf28775fe9_02975714',
  'variables' => 
  array (
    'year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5504cf28775fe9_02975714')) {function content_5504cf28775fe9_02975714($_smarty_tpl) {?>		<div class="container">
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
