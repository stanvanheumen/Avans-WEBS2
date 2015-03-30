<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-30 14:55:59
         compiled from "app\view\cms\edit_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1119655186e78ad8979-27181997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20bcb134513a88604485ee9d9cf391c02b665f0c' => 
    array (
      0 => 'app\\view\\cms\\edit_product.tpl',
      1 => 1427720155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1119655186e78ad8979-27181997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55186e78bc66c1_50634230',
  'variables' => 
  array (
    'product' => 0,
    'categorie' => 0,
    'cat' => 0,
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55186e78bc66c1_50634230')) {function content_55186e78bc66c1_50634230($_smarty_tpl) {?><div class="container">
	<div class="row cms vertical-offset-20">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Product wijzigen</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/edit_product_post?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" method="post" role="form">
						<div class="form-group">
							<label for="categorie_id">Categorie</label>
							<select class="form-control" id="categorie_id" name="categorie_id">
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
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</option>
								<?php }?>
							<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="productnaam">Productnaam</label>
							<input type="text" class="form-control" id="productnaam" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
" name="productnaam" placeholder="Productnaam" required />
						</div>
						<div class="form-group">
							<label for="prijs">Prijs</label>
							<input type="number" min="1" step="0.01" class="form-control" id="prijs" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
" name="prijs" placeholder="Prijs" required />
						</div>
						<div class="form-group">
							<label for="beschrijving_kort">Korte beschrijving</label>
							<input type="text" class="form-control" id="beschrijving_kort" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getBeschrijvingKort();?>
" name="beschrijving_kort" placeholder="Korte beschrijving" required />
						</div>
						<div class="form-group">
							<label for="beschrijving_lang">Lange beschrijving</label>
							<textarea class="form-control" id="beschrijving_lang" name="beschrijving_lang" required><?php echo $_smarty_tpl->tpl_vars['product']->value->getBeschrijving();?>
</textarea>
						</div>
						<div class="form-group">
							<label for="voorraad">Voorraad</label>
							<input type="number" min="0" class="form-control" id="voorraad" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getVoorraad();?>
" name="voorraad" placeholder="Voorraad" required />
						</div>
						<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
						<label><?php echo $_smarty_tpl->tpl_vars['image']->value->getLink();?>
</label>
						<img src="/<?php echo $_smarty_tpl->tpl_vars['image']->value->getLink();?>
" alt="img" width="100" class="img-responsive" />
						<?php } ?>
						<div class="pull-right">
							<button type="submit" class="btn btn-default">Wijzigen</button>
							<a href="/cms/products" class="btn btn-default">Annuleren</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
