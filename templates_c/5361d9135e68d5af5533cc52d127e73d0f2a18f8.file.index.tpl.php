<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 12:03:25
         compiled from "app\view\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2037655018e1780c818-22574912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5361d9135e68d5af5533cc52d127e73d0f2a18f8' => 
    array (
      0 => 'app\\view\\home\\index.tpl',
      1 => 1426503750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2037655018e1780c818-22574912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55018e178142f3_46670157',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55018e178142f3_46670157')) {function content_55018e178142f3_46670157($_smarty_tpl) {?><div class="container">
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
