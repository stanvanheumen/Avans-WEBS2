<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-15 15:48:33
         compiled from "app\view\cms\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3258455059bc1068d87-15433124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8191dac76a6f2ee5b12567b2bb8119623bfde30' => 
    array (
      0 => 'app\\view\\cms\\edit.tpl',
      1 => 1426430894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3258455059bc1068d87-15433124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorie' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55059bc10caf09_69646449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55059bc10caf09_69646449')) {function content_55059bc10caf09_69646449($_smarty_tpl) {?><div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Product wijzigen</h4>
				</div>
				<div class="panel-body">
					<form method="post" role="form">
					    <div class="form-group">
							<label for="categorie">Categorie:</label>
							<select class="form-control" id="categorie" name="categorie">
							<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
							  	<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
}"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</option>
							<?php } ?>
							</select>
					    </div>
					    <div class="form-group">
					     	<label for="productnaam">Productnaam:</label>
					      	<input type="text" class="form-control" id="productnaam" name="productnaam" placeholder="Productnaam" />
					    </div>
					    <div class="form-group">
					     	<label for="prijs">Prijs:</label>
					      	<input type="text" class="form-control" id="prijs" name="prijs" placeholder="Prijs" />
					    </div>
					    <div class="form-group">
					     	<label for="beschrijving">Beschrijving:</label>
					      	<textarea type="text" class="form-control" id="beschrijving" name="beschrijving" placeholder="Beschrijving"></textarea>
					    </div>
					    <div class="form-group">
					     	<label for="voorraad">Voorraad:</label>
					      	<input type="text" class="form-control" id="voorraad" name="voorraad" placeholder="Voorraad" />
					    </div>
					    <div class="form-group">
					     	<label for="kortingsprijs">Kortingsprijs:</label>
					      	<input type="text" class="form-control" id="kortingsprijs" name="kortingsprijs" placeholder="Kortingsprijs" />
					    </div>
					    <button type="submit" class="btn btn-default">Toevoegen</button>
					    <a href="/cms/dashboard" class="btn btn-default">Annuleren</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
