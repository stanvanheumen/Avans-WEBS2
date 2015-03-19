<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-19 14:18:46
         compiled from "app\view\home\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29582550acaa1938307-87534900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdff2a688485199f68e52632dab01c8d55870cbe' => 
    array (
      0 => 'app\\view\\home\\account.tpl',
      1 => 1426771125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29582550acaa1938307-87534900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550acaa1938f49_47910552',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550acaa1938f49_47910552')) {function content_550acaa1938f49_47910552($_smarty_tpl) {?><div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3 class="panel-title">Mijn account</h3>
		</div>
	</div>
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
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td class="actions" data-th="">
								<button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Totaal 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i>Ga door met winkelen</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Totaal $1.99</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Betalen <i class="glyphicon glyphicon-chevron-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div><?php }} ?>
