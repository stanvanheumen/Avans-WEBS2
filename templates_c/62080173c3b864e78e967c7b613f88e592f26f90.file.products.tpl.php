<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 20:44:50
         compiled from "app\view\cms\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134395516ea2f47f5e2-36964857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62080173c3b864e78e967c7b613f88e592f26f90' => 
    array (
      0 => 'app\\view\\cms\\products.tpl',
      1 => 1427571888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134395516ea2f47f5e2-36964857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5516ea2f6d1bb9_55855378',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'pages' => 0,
    'current_page' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
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
	<div class="row cms">
		<div class="col-md-12">
			<nav class="pull-right">
				<ul class="pagination pagination-sm">
					<?php if ($_smarty_tpl->tpl_vars['pages']->value>1) {?>
					<?php if ($_smarty_tpl->tpl_vars['current_page']->value>1) {?>
						<li><a href="/cms/products?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					<?php } else { ?>
						<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['p']->step = 1;$_smarty_tpl->tpl_vars['p']->total = (int) ceil(($_smarty_tpl->tpl_vars['p']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['p']->step));
if ($_smarty_tpl->tpl_vars['p']->total > 0) {
for ($_smarty_tpl->tpl_vars['p']->value = 1, $_smarty_tpl->tpl_vars['p']->iteration = 1;$_smarty_tpl->tpl_vars['p']->iteration <= $_smarty_tpl->tpl_vars['p']->total;$_smarty_tpl->tpl_vars['p']->value += $_smarty_tpl->tpl_vars['p']->step, $_smarty_tpl->tpl_vars['p']->iteration++) {
$_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->iteration == 1;$_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration == $_smarty_tpl->tpl_vars['p']->total;?>
					<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['current_page']->value) {?>
					<li class="active"><a href="/cms/products?page=$p"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a></li>
					<?php } else { ?>
					<li><a href="/cms/products?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a></li>
					<?php }?>
					<?php }} ?>
					<?php if ($_smarty_tpl->tpl_vars['pages']->value==$_smarty_tpl->tpl_vars['current_page']->value) {?>
					<li class="disabled"><a href="#">&raquo;</a></li>
					<?php } else { ?>
					<li><a href="/cms/products?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">&raquo;</a></li>
					<?php }?>
					<?php }?>
				</ul>
			</nav>
		</div>
	</div>
</div><?php }} ?>
