<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 23:34:27
         compiled from "app\view\home\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285145515a6afc4fdf7-61465042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e94cb9105eadef0e59671df8bdd44a5bcb2e357d' => 
    array (
      0 => 'app\\view\\home\\orders.tpl',
      1 => 1427582032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285145515a6afc4fdf7-61465042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515a6afcc7271_13104001',
  'variables' => 
  array (
    'orderproducts' => 0,
    'order' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515a6afcc7271_13104001')) {function content_5515a6afcc7271_13104001($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="panel-title">Bestellingen</span>
				</div>
				<?php if (empty($_smarty_tpl->tpl_vars['orderproducts']->value)) {?>
				<div class="panel-body">
					<p>Je hebt nog geen bestellingen geplaatst.</p>
				</div>
				<?php } else { ?>
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
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }} ?>
