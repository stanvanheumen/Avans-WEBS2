<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 18:46:59
         compiled from "app\view\home\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219745516e9130d3cc4-79170978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1d5c912fb43ee5b95ed5c06305710d8b112173f' => 
    array (
      0 => 'app\\view\\home\\orders.tpl',
      1 => 1427561935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219745516e9130d3cc4-79170978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderproducts' => 0,
    'order' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5516e91316df57_91667962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5516e91316df57_91667962')) {function content_5516e91316df57_91667962($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="panel-title">Bestellingen</span>
				</div>
				<table class="table table-bordered">
					<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
					<tr>
					<td>
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
					<div class="row">
						<div class="col-md-2">
							<div class="orders">
								<img src="/uploads/<?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getProductId();?>
_1.png" class="img-responsive center-block" alt="-" />
							</div>
						</div>
						<div class="col-md-3">
							<h4><?php echo $_smarty_tpl->tpl_vars['product']->value[1]->getProductNaam();?>
</h4>
						</div>
						<div class="col-md-3">
							<span class="search-title">&euro;<?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getPrijs();?>
</span>
						</div>
						<div class="col-md-4">
							<span class="search-title">x<?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getAantal();?>
</span>
						</div>
					</div>
					<?php } ?>
					</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
