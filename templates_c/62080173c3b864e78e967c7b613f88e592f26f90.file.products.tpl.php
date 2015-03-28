<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 18:51:43
         compiled from "app\view\cms\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134395516ea2f47f5e2-36964857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62080173c3b864e78e967c7b613f88e592f26f90' => 
    array (
      0 => 'app\\view\\cms\\products.tpl',
      1 => 1427442937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134395516ea2f47f5e2-36964857',
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
  'unifunc' => 'content_5516ea2f6d1bb9_55855378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5516ea2f6d1bb9_55855378')) {function content_5516ea2f6d1bb9_55855378($_smarty_tpl) {?><div class="container">
	<div class="row cms vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-success" href="/cms/create_product"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row cms">
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
							<a href="/home/productdetails?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" class="btn btn-primary"><span class="glyphicon glyphicon-sunglasses"></span></a>
							<a class="btn btn-warning" href="/cms/edit_product?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?');" class="btn btn-danger" href="/cms/delete_product?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
