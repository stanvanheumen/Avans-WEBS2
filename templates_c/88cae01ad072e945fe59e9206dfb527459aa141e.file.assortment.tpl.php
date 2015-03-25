<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-25 12:59:28
         compiled from "app\view\home\assortment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3273550194704e0cd7-15619978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88cae01ad072e945fe59e9206dfb527459aa141e' => 
    array (
      0 => 'app\\view\\home\\assortment.tpl',
      1 => 1427274424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3273550194704e0cd7-15619978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55019470546e56_89302312',
  'variables' => 
  array (
    'sub_categories' => 0,
    'currcategory' => 0,
    'cat' => 0,
    'assort_categories' => 0,
    'category' => 0,
    'products' => 0,
    'product' => 0,
    'last_product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55019470546e56_89302312')) {function content_55019470546e56_89302312($_smarty_tpl) {?><div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3 class="panel-title">Assortiment</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<?php if (isset($_smarty_tpl->tpl_vars['sub_categories']->value)) {?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Subcategorie&euml;n</h3>
				</div>
				<ul class="list-group">
					<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?> 
						<?php if (isset($_smarty_tpl->tpl_vars['currcategory']->value)&&$_smarty_tpl->tpl_vars['cat']->value->getId()==$_smarty_tpl->tpl_vars['currcategory']->value) {?>
							<li class="list-group-item cat-active"><a href="?categorie=<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</a></li>
						<?php } else { ?>
							<li class="list-group-item"><a href="?categorie=<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</a></li>
						<?php }?>
					<?php } ?> 
				</ul>
			</div>
			<?php }?>
		
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Categorie&euml;n</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item active-link"><a href="#">Alle artikelen</a></li>		
					<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assort_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?> 
						<?php if (isset($_smarty_tpl->tpl_vars['currcategory']->value)&&$_smarty_tpl->tpl_vars['cat']->value->getId()==$_smarty_tpl->tpl_vars['currcategory']->value) {?>
							<li class="list-group-item cat-active"><a href="?categorie=<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</a></li>
						<?php } else { ?>
							<li class="list-group-item"><a href="?categorie=<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</a></li>
						<?php }?>
					<?php } ?> 
				</ul>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<?php echo $_smarty_tpl->tpl_vars['category']->value;?>

					</h3>
				</div>
				<div class="panel-body">
				<?php if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>
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
						<div class="col-md-2 auctions">Prijs &euro; <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrijs();?>
</div>
						<div class="col-md-4">
							<?php if (isset($_SESSION['home_authenticated'])&&$_SESSION['home_authenticated']==1) {?>
							<form action="/home/addtocart" method="post" role="form">
								<input type="hidden" name="value" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" />
								<button type="submit" class="btn btn-success">Toevoegen aan winkelwagentje</button>
							</form>
							<?php }?>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['last_product']->value!=$_smarty_tpl->tpl_vars['product']->value) {?>
					<hr/>
					<?php }?>
					<?php } ?> 
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
