<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 22:22:19
         compiled from "app\view\cms\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:584550c2da4604167-62824243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b149fdc189d3a19370364b0a93fca55ea1aba77' => 
    array (
      0 => 'app\\view\\cms\\orders.tpl',
      1 => 1427232138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '584550c2da4604167-62824243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550c2da46580e2_50778041',
  'variables' => 
  array (
    'orders' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c2da46580e2_50778041')) {function content_550c2da46580e2_50778041($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-blue" href="/cms/"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Bestellingen</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-8">Id</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
					<tr>
						<td class="col-md-8"><?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
