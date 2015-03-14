<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-14 00:34:26
         compiled from "app\view\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206725501dc8d47a230-57829835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3682ca662719940da0ffb28a935e99ae0c65336' => 
    array (
      0 => 'app\\view\\home\\index.tpl',
      1 => 1426289663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206725501dc8d47a230-57829835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501dc8d47d571_00519320',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501dc8d47d571_00519320')) {function content_5501dc8d47d571_00519320($_smarty_tpl) {?><div class="container">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body test-panel">
				</div>
				<div class="panel-footer">
					<a href="/home/productdetails?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</a>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div><?php }} ?>
