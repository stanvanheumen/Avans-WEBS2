<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-27 09:06:49
         compiled from "app\view\home\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29582550acaa1938307-87534900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdff2a688485199f68e52632dab01c8d55870cbe' => 
    array (
      0 => 'app\\view\\home\\account.tpl',
      1 => 1427442964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29582550acaa1938307-87534900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550acaa1938f49_47910552',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'orderedProducts' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550acaa1938f49_47910552')) {function content_550acaa1938f49_47910552($_smarty_tpl) {?><div class="container">
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

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="panel-title">Bestellingen</span>
				</div>
				<div class="panel-body">
					<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderedProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
					<div class="row">
						<div class="col-md-2">
							<img src="/uploads/<?php echo $_smarty_tpl->tpl_vars['order']->value->getProductId();?>
_1.png" class="img-responsive center-block" alt="-" />
						</div>
						<span class="search-title">&euro;<?php echo $_smarty_tpl->tpl_vars['order']->value->getPrijs();?>
</span>
						<span class="panel-title">x<?php echo $_smarty_tpl->tpl_vars['order']->value->getAantal();?>
</span>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
