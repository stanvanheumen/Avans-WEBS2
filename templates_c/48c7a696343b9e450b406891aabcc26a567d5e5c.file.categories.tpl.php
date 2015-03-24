<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 19:36:46
         compiled from "app\view\cms\categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17905550ac8eb2b2dd9-83920479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48c7a696343b9e450b406891aabcc26a567d5e5c' => 
    array (
      0 => 'app\\view\\cms\\categories.tpl',
      1 => 1427222203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17905550ac8eb2b2dd9-83920479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550ac8eb32dec5_04172557',
  'variables' => 
  array (
    'categories' => 0,
    'categorie' => 0,
    'sub_categories' => 0,
    'subcategorie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550ac8eb32dec5_04172557')) {function content_550ac8eb32dec5_04172557($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2 pull-right">
			<div class="panel panel-default">
				<div class="panel-body text-centered">
					<a class="btn btn-success" href="/cms/create_category"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
					<a class="btn btn-blue" href="/cms/"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Categorie&#235;n</h4>
				</div>
				<table class="table table-bordered">
					<tr>
						<th class="col-md-10">Naam</th>
						<th class="col-md-2 text-centered">Opties</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['categorie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categorie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->key => $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->_loop = true;
?>
					<tr>
						<td class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getNaam();?>
</td>
						<td class="col-md-2 text-centered">
							<a class="btn btn-warning" href="/cms/edit_category?id=<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a class="btn btn-danger" href="/cms/delete_category?id=<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['subcategorie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategorie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategorie']->key => $_smarty_tpl->tpl_vars['subcategorie']->value) {
$_smarty_tpl->tpl_vars['subcategorie']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['subcategorie']->value->getCategorieParent()==$_smarty_tpl->tpl_vars['categorie']->value->getId()) {?>
					<tr>
						<td class="col-md-10 horizontal-offset-20"><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getNaam();?>
 &gt; <?php echo $_smarty_tpl->tpl_vars['subcategorie']->value->getNaam();?>
</td>
						<td class="col-md-2 text-centered">
							<a class="btn btn-warning" href="/cms/edit_category?id=<?php echo $_smarty_tpl->tpl_vars['subcategorie']->value->getId();?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a class="btn btn-danger" href="/cms/delete_category?id=<?php echo $_smarty_tpl->tpl_vars['subcategorie']->value->getId();?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php }?>
					<?php } ?>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
