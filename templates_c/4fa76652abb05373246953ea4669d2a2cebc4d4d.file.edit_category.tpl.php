<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-26 22:16:59
         compiled from "app\view\cms\edit_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31836550c28784616c4-29352047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fa76652abb05373246953ea4669d2a2cebc4d4d' => 
    array (
      0 => 'app\\view\\cms\\edit_category.tpl',
      1 => 1427404571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31836550c28784616c4-29352047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550c28784bf812_06601462',
  'variables' => 
  array (
    'title' => 0,
    'categorie' => 0,
    'parent_categories' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c28784bf812_06601462')) {function content_550c28784bf812_06601462($_smarty_tpl) {?><div class="container">
	<div class="row cms">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/edit_category_post?id=<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
" method="post" role="form">
						<div class="form-group">
							<label for="naam">Naam</label>
							<input type="text" class="form-control" id="naam" value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getNaam();?>
" name="naam" placeholder="Naam" required />
						</div>
						
						<?php if (isset($_smarty_tpl->tpl_vars['parent_categories']->value)) {?>
						<div class="form-group">
							<label for="categorie">Hoofd Categorie</label>
							<select class="form-control" id="categorie_id" name="categorie_id" required>
								<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['cat']->value->getId()==$_smarty_tpl->tpl_vars['categorie']->value->getCategorieParent()) {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</option>
								<?php } else { ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</option>
								<?php }?>
								<?php } ?>
							</select>
						</div>
						<?php }?>
						
						<div class="pull-right">
							<button type="submit" class="btn btn-default">Wijzigen</button>
							<a href="/cms/categories" class="btn btn-default">Annuleren</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
