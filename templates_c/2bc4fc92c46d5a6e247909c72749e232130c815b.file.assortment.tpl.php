<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 18:33:58
         compiled from "app\view\home\assortment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125465516e6069d0274-81963990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bc4fc92c46d5a6e247909c72749e232130c815b' => 
    array (
      0 => 'app\\view\\home\\assortment.tpl',
      1 => 1427561935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125465516e6069d0274-81963990',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5516e606b4c288_40581187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5516e606b4c288_40581187')) {function content_5516e606b4c288_40581187($_smarty_tpl) {?><div class="container">
	<div class="panel panel-primary">
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
		
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Categorie&euml;n</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item active-link"><a href="?categorie=-1">Alle artikelen</a></li>		
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
			<div class="panel panel-primary">
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
								<div class="orders">
									<img class="img-responsive" src="/uploads/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
_1.png" alt="auction">
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
