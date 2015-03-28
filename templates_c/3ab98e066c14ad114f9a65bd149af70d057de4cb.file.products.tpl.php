<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 22:51:37
         compiled from "app\view\cms\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146755515a53585ae21-27079707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ab98e066c14ad114f9a65bd149af70d057de4cb' => 
    array (
      0 => 'app\\view\\cms\\products.tpl',
      1 => 1427579203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146755515a53585ae21-27079707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515a5359756d8_56857063',
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
<?php if ($_valid && !is_callable('content_5515a5359756d8_56857063')) {function content_5515a5359756d8_56857063($_smarty_tpl) {?><div class="container">
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
