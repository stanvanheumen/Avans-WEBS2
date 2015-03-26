<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-26 14:14:06
         compiled from "app\view\cms\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16362550e9d3a0890e6-40739039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a912ec40fa2e13af27437022c2ff072558c04605' => 
    array (
      0 => 'app\\view\\cms\\orders.tpl',
      1 => 1427323563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16362550e9d3a0890e6-40739039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550e9d3a0e92f4_54505766',
  'variables' => 
  array (
    'orders' => 0,
    'order' => 0,
    'accounts' => 0,
    'account' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550e9d3a0e92f4_54505766')) {function content_550e9d3a0e92f4_54505766($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Bestellingen</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-2">Id</th>
						<th class="col-md-8">E-mail</th>
						<th class="col-md-2">Opties</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
					<tr>
						<td class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
</td>
						<?php  $_smarty_tpl->tpl_vars['account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['account']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['account']->value->getId()==$_smarty_tpl->tpl_vars['order']->value->getAccountId()) {?>
						<td class="col-md-8">
							<?php echo $_smarty_tpl->tpl_vars['account']->value->getGebruikersnaam();?>
	
						</td>
						<?php }?>
						<?php } ?>
						<td class="col-md-2 text-centered">
							<a href="/cms/read_bestelling?id=<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
" class="btn btn-primary"><span class="glyphicon glyphicon-sunglasses"></span></a>
							<a onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?');" class="btn btn-danger" href="/cms/delete_bestelling?id=<?php echo $_smarty_tpl->tpl_vars['order']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
