<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-23 17:24:52
         compiled from "app\view\home\productdetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2302255032030927f67-17972950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cec943a4d93c3efd60b39dec9d88ffc4407eddc' => 
    array (
      0 => 'app\\view\\home\\productdetails.tpl',
      1 => 1427127889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2302255032030927f67-17972950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550320309c4ea6_72855159',
  'variables' => 
  array (
    'product' => 0,
    'thumbnail' => 0,
    'product_afbeeldingen' => 0,
    'afbeelding' => 0,
    'in_shopping_cart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550320309c4ea6_72855159')) {function content_550320309c4ea6_72855159($_smarty_tpl) {?><div class="container">
	<h1><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="col-md-8">
				<a class="fancybox" href="/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value->getLink();?>
" rel="ligthbox">
					<div class="panel panel-default">
						<div class="panel-body product-thumbnail">
							<img src="/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value->getLink();?>
" class="img-responsive center-block">
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<?php  $_smarty_tpl->tpl_vars['afbeelding'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['afbeelding']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_afbeeldingen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['afbeelding']->key => $_smarty_tpl->tpl_vars['afbeelding']->value) {
$_smarty_tpl->tpl_vars['afbeelding']->_loop = true;
?>
				<a class="fancybox" href="/<?php echo $_smarty_tpl->tpl_vars['afbeelding']->value->getLink();?>
" rel="ligthbox">
					<div class="panel panel-default pull-left">
						<div class="panel-body product-image">
							<img src="/<?php echo $_smarty_tpl->tpl_vars['afbeelding']->value->getLink();?>
" class="img-responsive center-block">
						</div>
					</div>
				</a>
				<?php } ?>
			</div>
		</div>
		<div class="col-md-8">
			<table class="table">
				<tr>
					<td>Productnaam<td>
					<td><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</td>
				</tr>
				<tr>
					<td>Beschrijving<td>
					<td><?php echo $_smarty_tpl->tpl_vars['product']->value->getBeschrijving();?>
</td>
				</tr>
				<tr>
					<td>Prijs<td>
					<td>&euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</td>
				</tr>
				<tr>
					<td>Op voorraad<td>
					<td> 
					<?php if ($_smarty_tpl->tpl_vars['product']->value->getVoorraad()>0) {?>
					Ja
					<?php } else { ?>
					Nee
					<?php }?>
					</td>
				</tr>
				<tr>
					<td><td>
					<td>
						<?php if (isset($_SESSION['home_authenticated'])&&$_SESSION['home_authenticated']==1) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['in_shopping_cart']->value)) {?>
						<a href="/home/removefromcart?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" class="btn btn-danger">Verwijderen van winkelwagentje</a>
						<?php } else { ?>
						<form action="/home/addtocart" method="post" role="form">
							<input type="hidden" name="value" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" />
							<button type="submit" class="btn btn-success">Toevoegen aan winkelwagentje</button>
						</form>
						<?php }?>
						<?php }?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div><?php }} ?>
