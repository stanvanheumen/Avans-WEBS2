<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-26 14:14:10
         compiled from "app\view\cms\read_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9666551406227b01d5-29896990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89a9f6e2e60668a24a219308568f4b3c2fdb47e4' => 
    array (
      0 => 'app\\view\\cms\\read_order.tpl',
      1 => 1427323563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9666551406227b01d5-29896990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderedproducts' => 0,
    'products' => 0,
    'o_product' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55140622910f31_23809739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55140622910f31_23809739')) {function content_55140622910f31_23809739($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-primary" href="/cms/orders"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Bestelling</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-5">Naam</th>
						<th class="col-md-4">Prijs</th>
						<th class="col-md-3">Hoeveelheid</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['o_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderedproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o_product']->key => $_smarty_tpl->tpl_vars['o_product']->value) {
$_smarty_tpl->tpl_vars['o_product']->_loop = true;
?>
					<tr>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['o_product']->value->getProductId()==$_smarty_tpl->tpl_vars['product']->value->getId()) {?>
						<td class="col-md-5">
							<?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
	
						</td>
						<td class="col-md-5">
							&euro; <?php echo $_smarty_tpl->tpl_vars['o_product']->value->getPrijs();?>
	
						</td>
						<td class="col-md-5">
							<?php echo $_smarty_tpl->tpl_vars['o_product']->value->getAantal();?>
	
						</td>
						<?php }?>
						<?php } ?>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
