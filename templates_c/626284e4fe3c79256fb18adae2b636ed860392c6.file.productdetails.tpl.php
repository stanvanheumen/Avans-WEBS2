<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-13 09:34:21
         compiled from "app\view\home\productdetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238475502a10dd54694-70031408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '626284e4fe3c79256fb18adae2b636ed860392c6' => 
    array (
      0 => 'app\\view\\home\\productdetails.tpl',
      1 => 1426235646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238475502a10dd54694-70031408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5502a10ddc91f6_80810775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5502a10ddc91f6_80810775')) {function content_5502a10ddc91f6_80810775($_smarty_tpl) {?><div class="container">
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
	</table>
</div><?php }} ?>
