<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-26 15:17:41
         compiled from "app\view\cms\create_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26138550b0d81599466-28968862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b184ce3e7c840ddedeaca4d53caa0a29538bc60d' => 
    array (
      0 => 'app\\view\\cms\\create_category.tpl',
      1 => 1427379456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26138550b0d81599466-28968862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550b0d815c36a8_50554943',
  'variables' => 
  array (
    'title' => 0,
    'categorie' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b0d815c36a8_50554943')) {function content_550b0d815c36a8_50554943($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/create_category_post" method="post" role="form">
						<div class="form-group">
							<label for="naam">Naam</label>
							<input type="text" class="form-control" id="naam" name="naam" placeholder="Naam" required />
						</div>
						
						<div class="form-group">
							<label for="categorie_id">Hoofd Categorie</label>
							<select class="form-control" id="categorie_id" name="categorie_id">
								<option value="-1" selected>Nieuw</option>
								<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</option>
								<?php } ?>
							</select>
						</div>
						
						<div class="pull-right">
							<button type="submit" class="btn btn-default">Toevoegen</button>
							<a href="/cms/categories" class="btn btn-default">Annuleren</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
