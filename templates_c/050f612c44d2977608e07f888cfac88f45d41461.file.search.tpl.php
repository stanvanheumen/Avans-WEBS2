<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-22 12:10:52
         compiled from "app\view\home\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19748550ea33ced22b1-68899130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '050f612c44d2977608e07f888cfac88f45d41461' => 
    array (
      0 => 'app\\view\\home\\search.tpl',
      1 => 1427021083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19748550ea33ced22b1-68899130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'amount' => 0,
    'searchquery' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550ea33d39a9f1_46732260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550ea33d39a9f1_46732260')) {function content_550ea33d39a9f1_46732260($_smarty_tpl) {?><div class="custom-container content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
 resultaten gevonden voor '<?php echo $_smarty_tpl->tpl_vars['searchquery']->value;?>
'</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-body">	
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?> 			
						<div class="row">
							<div class="col-md-6">
								<div class="media">
									<div class="media-left media-middle">
										<img class="media-object" src="/assets/images/auction.png" alt="auction">
									</div>
									<div class="media-body">
										<h4 class="media-heading"><a href="productdetails?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</a></h4>
										<?php echo $_smarty_tpl->tpl_vars['product']->value->getBeschrijving();?>

									</div>
								</div>
							</div>
							<div class="col-md-3 auctions">Prijs &euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</div>
							<div class="col-md-3">
								<?php if (isset($_SESSION['home_authenticated'])&&$_SESSION['home_authenticated']==1) {?>
								<form action="/home/addtocart" method="post" role="form">
									<input type="hidden" name="value" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" />
									<button type="submit" class="btn btn-success">Toevoegen aan winkelwagentje</button>
								</form>
								<?php }?>
							</div>
						</div>
						<?php } ?>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>