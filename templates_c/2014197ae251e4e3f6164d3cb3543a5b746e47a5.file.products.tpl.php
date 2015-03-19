<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-18 10:18:32
         compiled from "app\view\cms\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5438550942e856c700-41336321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2014197ae251e4e3f6164d3cb3543a5b746e47a5' => 
    array (
      0 => 'app\\view\\cms\\products.tpl',
      1 => 1426670284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5438550942e856c700-41336321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550942e86271a7_44261361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550942e86271a7_44261361')) {function content_550942e86271a7_44261361($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-success" href="/cms/create_product"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
					<a class="btn btn-blue" href="/cms/"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Producten</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-8">Naam</th>
						<th class="col-md-2">Prijs</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
					<tr>
						<td class="col-md-8"><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</td>
						<td class="col-md-2">&euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</td>
						<td class="col-md-2 text-centered">
							<a class="btn btn-warning" href="/cms/edit_product?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a class="btn btn-danger" href="/cms/delete_product?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
