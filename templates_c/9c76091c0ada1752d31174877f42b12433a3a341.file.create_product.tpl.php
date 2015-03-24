<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 09:28:45
         compiled from "app\view\cms\create_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15432550a9a2169ddd6-44863675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c76091c0ada1752d31174877f42b12433a3a341' => 
    array (
      0 => 'app\\view\\cms\\create_product.tpl',
      1 => 1427185537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15432550a9a2169ddd6-44863675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550a9a216fdfb0_35834010',
  'variables' => 
  array (
    'categorie' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550a9a216fdfb0_35834010')) {function content_550a9a216fdfb0_35834010($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Product toevoegen</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/create_product_post" method="post" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label for="categorie">Categorie</label>
							<select class="form-control" id="categorie_id" name="categorie_id" required>
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
						<div class="form-group">
							<label for="productnaam">Productnaam</label>
							<input type="text" class="form-control" id="productnaam" name="productnaam" placeholder="Productnaam" required />
						</div>
						<div class="form-group">
							<label for="prijs">Prijs</label>
							<input type="text" class="form-control" id="prijs" name="prijs" placeholder="Prijs" required />
						</div>
						<div class="form-group">
							<label for="korte_beschrijving">Korte beschrijving</label>
							<input type="text" class="form-control" id="beschrijving_kort" name="beschrijving_kort" placeholder="Korte beschrijving" required />
						</div>
						<div class="form-group">
							<label for="lange_beschrijving">Lange beschrijving</label>
							<textarea type="text" class="form-control" id="beschrijving_lang" name="beschrijving_lang" placeholder="Lange beschrijving" required></textarea>
						</div>
						<div class="form-group">
							<label for="voorraad">Voorraad</label>
							<input type="text" class="form-control" id="voorraad" name="voorraad" placeholder="Voorraad" required />
						</div>
						<div class="form-group">
							<label for="image">Thumbnail</label>
							<input type="file" id="image" name="image" accept="image/*" />
						</div>
						<div class="form-group">
							<label for="images[]">Afbeeldingen</label>
							<input type="file" id="images" name="images[]" multiple="multiple" accept="image/*" />
						</div>
						<div class="pull-right">
							<button type="submit" class="btn btn-default">Toevoegen</button>
							<a href="/cms/products" class="btn btn-default">Annuleren</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
