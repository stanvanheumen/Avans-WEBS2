<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-22 11:45:14
         compiled from "app\view\cms\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16362550e9d3a0890e6-40739039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a912ec40fa2e13af27437022c2ff072558c04605' => 
    array (
      0 => 'app\\view\\cms\\orders.tpl',
      1 => 1427021083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16362550e9d3a0890e6-40739039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550e9d3a0e92f4_54505766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550e9d3a0e92f4_54505766')) {function content_550e9d3a0e92f4_54505766($_smarty_tpl) {?><div class="container">
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
						<th class="col-md-2">Betaalmethode</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
					<tr>
						<td class="col-md-8"><?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
</td>
						<td class="col-md-2">&euro; <?php echo $_smarty_tpl->tpl_vars['order']->value->getBetaalMethodeId();?>
</td>
						<td class="col-md-2 text-centered">
							<a class="btn btn-warning" href="/cms/edit_order?id=<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a class="btn btn-danger" href="/cms/delete_order?id=<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
