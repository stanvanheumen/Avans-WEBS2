<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-15 17:27:37
         compiled from "app\view\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102155018aacbf0e94-81580805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32efcc9b188c649b4044a0a7ab5b26049cefdc3c' => 
    array (
      0 => 'app\\view\\home\\index.tpl',
      1 => 1426436828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102155018aacbf0e94-81580805',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55018aacc1fd57_62237445',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55018aacc1fd57_62237445')) {function content_55018aacc1fd57_62237445($_smarty_tpl) {?><div class="container">
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
