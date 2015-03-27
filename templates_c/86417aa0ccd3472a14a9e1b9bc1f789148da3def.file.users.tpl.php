<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-27 08:57:22
         compiled from "app\view\cms\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8095550942e90a6b44-10350653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86417aa0ccd3472a14a9e1b9bc1f789148da3def' => 
    array (
      0 => 'app\\view\\cms\\users.tpl',
      1 => 1427442964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8095550942e90a6b44-10350653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550942e911a878_47271796',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550942e911a878_47271796')) {function content_550942e911a878_47271796($_smarty_tpl) {?><div class="container">
	<div class="row cms vertical-offset-20">
	</div>
	<div class="row cms">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Gebruikers</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-3">E-mail</th>
						<th class="col-md-2">Rank</th>
						<th class="col-md-2">Naam</th>
						<th class="col-md-3">Adres</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
					<tr>
						<td class="col-md-3"><?php echo $_smarty_tpl->tpl_vars['user']->value->getGebruikersnaam();?>
</td>
						<td class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['user']->value->getRankNaam();?>
</td>
						<td class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['user']->value->getNaam();?>
</td>
						<td class="col-md-3"><?php echo $_smarty_tpl->tpl_vars['user']->value->getAdres();?>
</td>
						<td class="col-md-2 text-centered">
							<a href="/cms/read_user?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" class="btn btn-primary"><span class="glyphicon glyphicon-sunglasses"></span></a>
							<a class="btn btn-warning" href="/cms/edit_user?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?');" class="btn btn-danger" href="/cms/delete_user?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
