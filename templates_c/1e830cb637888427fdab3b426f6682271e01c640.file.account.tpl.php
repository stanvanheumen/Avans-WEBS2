<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-27 19:49:55
         compiled from "app\view\home\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63395515a4b108e7c5-44202917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e830cb637888427fdab3b426f6682271e01c640' => 
    array (
      0 => 'app\\view\\home\\account.tpl',
      1 => 1427482194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63395515a4b108e7c5-44202917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515a4b114de31_35452587',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515a4b114de31_35452587')) {function content_5515a4b114de31_35452587($_smarty_tpl) {?><div class="container">
	<form action="/home/pay" method="post" role="form">
		<table id="cart" class="table table-hover table-condensed">
			<thead>
				<tr>
					<th style="width:50%">Product</th>
					<th style="width:10%">Prijs</th>
					<th style="width:8%">Hoeveelheid</th>
					<th style="width:22%" class="text-center">Subtotaal</th>
					<th style="width:10%"></th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<tr>
					<td data-th="Product">
						<div class="row">
							<div class="col-sm-2 hidden-xs"><img class="media-object" width="100" src="/uploads/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
_1.png" alt="auction"></div>
							<div class="col-sm-10">
								<h4 class="nomargin"><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</h4>
								<p><?php echo $_smarty_tpl->tpl_vars['product']->value->getBeschrijvingKort();?>
</p>
							</div>
						</div>
					</td>
					<td data-th="Price">&euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</td>
					<td data-th="Quantity">
						<input type="number" min="1" name="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" id="input<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" onchange="update(<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
, <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
)" class="form-control text-center" value="1">
					</td>
					<td data-th="Subtotal" data-price="<?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
" id="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" class="product-price text-center">&euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</td>
					<td class="actions">
						<a href="/home/removefromcart?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>								
					</td>
				</tr>
				<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<td><a href="/home/index" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i>Ga door met winkelen</a></td>
					<td colspan="2" class="hidden-xs"></td>
					<td class="hidden-xs text-center total-price"></td>
					<td><button type="submit" class="btn btn-success btn-block">Betalen <i class="glyphicon glyphicon-chevron-right"></i></button></td>
				</tr>
			</tfoot>
		</table>
	</form>
</div><?php }} ?>
