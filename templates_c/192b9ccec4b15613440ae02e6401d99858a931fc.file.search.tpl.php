<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 23:13:53
         compiled from "app\view\home\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309635515ab80646529-69452743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '192b9ccec4b15613440ae02e6401d99858a931fc' => 
    array (
      0 => 'app\\view\\home\\search.tpl',
      1 => 1427580832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309635515ab80646529-69452743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515ab806f5744_92468997',
  'variables' => 
  array (
    'amount' => 0,
    'searchquery' => 0,
    'products' => 0,
    'product_images' => 0,
    'product' => 0,
    'afbeelding' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515ab806f5744_92468997')) {function content_5515ab806f5744_92468997($_smarty_tpl) {?><div class="custom-container content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
 resultaten gevonden voor '<?php echo $_smarty_tpl->tpl_vars['searchquery']->value;?>
'</h3>
					</div>
					<div class="panel-body">	
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?> 			
						<div class="row vertical-offset-7">
							<div class="col-md-6">
								<div class="media">
									<div class="col-md-6">
										<div class="panel-body featured">
											<?php  $_smarty_tpl->tpl_vars['afbeelding'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['afbeelding']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['afbeelding']->key => $_smarty_tpl->tpl_vars['afbeelding']->value) {
$_smarty_tpl->tpl_vars['afbeelding']->_loop = true;
?>
												<?php if ($_smarty_tpl->tpl_vars['product']->value->getId()==$_smarty_tpl->tpl_vars['afbeelding']->value->getProductId()) {?>
												<img class="img-responsive center-block" src="/<?php echo $_smarty_tpl->tpl_vars['afbeelding']->value->getLink();?>
" alt="auction">
												<?php }?>
											<?php } ?>
										</div>
									</div>
									<div class="media-body">
										<h4 class="media-heading"><a href="productdetails?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</a></h4>
										<?php echo $_smarty_tpl->tpl_vars['product']->value->getBeschrijving();?>

									</div>
								</div>
							</div>
							<div class="col-md-3 auctions"><span class="search-title">&euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</span></div>
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
