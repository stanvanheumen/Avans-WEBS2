<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-22 13:27:05
         compiled from "app\view\home\productdetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286495501c8b33e6ab1-31103040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dae565c0ecd946c4f7a2ecd408f37cc9b20b7a2' => 
    array (
      0 => 'app\\view\\home\\productdetails.tpl',
      1 => 1427027220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286495501c8b33e6ab1-31103040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501c8b346ffa1_73922325',
  'variables' => 
  array (
    'product' => 0,
    'in_shopping_cart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501c8b346ffa1_73922325')) {function content_5501c8b346ffa1_73922325($_smarty_tpl) {?><div class="container">
	<h1><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</h1>
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
</div><?php }} ?>
