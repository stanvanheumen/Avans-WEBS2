<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-27 19:43:08
         compiled from "app\view\cms\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322875515a4bc3036c0-72626828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9fdea4343112bafb3e63817b95dd194c0ef59c4' => 
    array (
      0 => 'app\\view\\cms\\dashboard.tpl',
      1 => 1427404391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322875515a4bc3036c0-72626828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'categories' => 0,
    'orders' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515a4bc3a1f88_93002209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515a4bc3a1f88_93002209')) {function content_5515a4bc3a1f88_93002209($_smarty_tpl) {?><div class="container">
	<div class="row cms">
		<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
			<a class="dashboard-stat dashboard-stat-light blue-soft" href="/cms/products">
			<div class="visual">
				<i class="fa fa-suitcase"></i>
			</div>
			<div class="details">
				<div class="number">
					 <?php echo $_smarty_tpl->tpl_vars['products']->value;?>

				</div>
				<div class="desc">
					 Producten
				</div>
			</div>
			</a>
		</div>

		<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
			<a class="dashboard-stat dashboard-stat-light purple-soft" href="/cms/categories">
			<div class="visual">
				<i class="fa fa-globe"></i>
			</div>
			<div class="details">
				<div class="number">
					 <?php echo $_smarty_tpl->tpl_vars['categories']->value;?>

				</div>
				<div class="desc">
					 Categorie&#235;n
				</div>
			</div>
			</a>
		</div>
	</div>
	<div class="row cms">	
		<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
			<a class="dashboard-stat dashboard-stat-light green-soft" href="/cms/orders">
			<div class="visual">
				<i class="fa fa-shopping-cart"></i>
			</div>
			<div class="details">
				<div class="number">
					 <?php echo $_smarty_tpl->tpl_vars['orders']->value;?>

				</div>
				<div class="desc">
					 Bestellingen
				</div>
			</div>
			</a>
		</div>

		<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
			<a class="dashboard-stat dashboard-stat-light red-soft" href="/cms/users">
			<div class="visual">
				<i class="fa fa-user"></i>
			</div>
			<div class="details">
				<div class="number">
					 <?php echo $_smarty_tpl->tpl_vars['users']->value;?>

				</div>
				<div class="desc">
					 Gebruikers
				</div>
			</div>
			</a>
		</div>
	</div>
</div><?php }} ?>
