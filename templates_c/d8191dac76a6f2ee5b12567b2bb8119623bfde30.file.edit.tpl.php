<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 17:38:45
         compiled from "app\view\cms\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3258455059bc1068d87-15433124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8191dac76a6f2ee5b12567b2bb8119623bfde30' => 
    array (
      0 => 'app\\view\\cms\\edit.tpl',
      1 => 1426523917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3258455059bc1068d87-15433124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55059bc10caf09_69646449',
  'variables' => 
  array (
    'product' => 0,
    'categorie' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55059bc10caf09_69646449')) {function content_55059bc10caf09_69646449($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Product wijzigen</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/edit_post?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" method="post" role="form">
					    <div class="form-group">
							<label for="categorie">Categorie:</label>
							<select class="form-control" id="categorie_id" name="categorie_id" required>
							<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
							  	<?php if ($_smarty_tpl->tpl_vars['product']->value->getCategorieId()==$_smarty_tpl->tpl_vars['cat']->value->getId()) {?>
							  	<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</option>
							  	<?php } else { ?>
							  	<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
}"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</option>
							  	<?php }?>
							<?php } ?>
							</select>
					    </div>
					    <div class="form-group">
					     	<label for="productnaam">Productnaam:</label>
					      	<input type="text" class="form-control" id="productnaam" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
" name="productnaam" placeholder="Productnaam" required />
					    </div>
					    <div class="form-group">
					     	<label for="prijs">Prijs:</label>
					      	<input type="text" class="form-control" id="prijs" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
" name="prijs" placeholder="Prijs" required />
					    </div>
					    <div class="form-group">
					     	<label for="beschrijving">Beschrijving:</label>
					      	<textarea type="text" class="form-control" id="beschrijving" name="beschrijving" placeholder="Beschrijving" required ><?php echo $_smarty_tpl->tpl_vars['product']->value->getBeschrijving();?>
</textarea>
					    </div>
					    <div class="form-group">
					     	<label for="voorraad">Voorraad:</label>
					      	<input type="text" class="form-control" id="voorraad" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getVoorraad();?>
" name="voorraad" placeholder="Voorraad" required />
					    </div>
					    <button type="submit" class="btn btn-default">Wijzigen</button>
					    <a href="/cms/dashboard" class="btn btn-default">Annuleren</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>