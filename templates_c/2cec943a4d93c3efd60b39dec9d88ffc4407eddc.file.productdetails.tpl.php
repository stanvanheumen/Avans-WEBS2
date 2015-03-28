<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 19:01:28
         compiled from "app\view\home\productdetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55015515a49c734fe0-53263257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cec943a4d93c3efd60b39dec9d88ffc4407eddc' => 
    array (
      0 => 'app\\view\\home\\productdetails.tpl',
      1 => 1427565638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55015515a49c734fe0-53263257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515a49c7fde70_39206402',
  'variables' => 
  array (
    'product' => 0,
    'thumbnail' => 0,
    'product_afbeeldingen' => 0,
    'afbeelding' => 0,
    'in_shopping_cart' => 0,
    'reviews' => 0,
    'review' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515a49c7fde70_39206402')) {function content_5515a49c7fde70_39206402($_smarty_tpl) {?><div class="container">
	<h1><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="col-md-8">
				<a class="fancybox" href="/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value->getLink();?>
" rel="lightbox">
					<div class="panel panel-primary">
						<div class="panel-body product-thumbnail">
							<img src="/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value->getLink();?>
" class="img-responsive center-block" alt="img">
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
" rel="lightbox">
					<div class="panel panel-primary pull-left">
						<div class="panel-body product-image">
							<img src="/<?php echo $_smarty_tpl->tpl_vars['afbeelding']->value->getLink();?>
" class="img-responsive center-block" alt="img">
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
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span class="panel-title">Review door <?php echo $_smarty_tpl->tpl_vars['review']->value->getVoornaam();?>
 op <?php echo $_smarty_tpl->tpl_vars['review']->value->getDatum();?>
</span>
					</div>
					<div class="panel-body">
						<?php echo $_smarty_tpl->tpl_vars['review']->value->getBericht();?>

					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<?php if (isset($_SESSION['home_authenticated'])&&$_SESSION['home_authenticated']==1) {?>
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<span class="panel-title">Schrijf een review</span>
					</div>
					<div class="panel-body">
						<form action="/home/postreview?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" method="post" role="form" enctype="multipart/form-data">
							<div class="form-group">
								<textarea class="form-control" id="review" name="review" placeholder="Type je review..." required></textarea>
							</div>
							<div class="pull-right">
								<button type="submit" class="btn btn-primary">Plaatsen</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
</div><?php }} ?>
