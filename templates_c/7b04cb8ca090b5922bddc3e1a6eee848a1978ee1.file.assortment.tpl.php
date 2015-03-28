<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 23:35:34
         compiled from "app\view\home\assortment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147685515ab84da5cd9-45517722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b04cb8ca090b5922bddc3e1a6eee848a1978ee1' => 
    array (
      0 => 'app\\view\\home\\assortment.tpl',
      1 => 1427582032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147685515ab84da5cd9-45517722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515ab84eec4f9_85768825',
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
    'pages' => 0,
    'current_page' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515ab84eec4f9_85768825')) {function content_5515ab84eec4f9_85768825($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php if (isset($_smarty_tpl->tpl_vars['sub_categories']->value)) {?>
			<div class="panel panel-primary">
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
							<li class="list-group-item cat-active"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</li>
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
							<li class="list-group-item cat-active"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</li>
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
							<?php if (isset($_SESSION['shoppingcart'])&&in_array($_smarty_tpl->tpl_vars['product']->value->getId(),$_SESSION['shoppingcart'])) {?> 
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
	<div class="row">
		<div class="col-md-12">
			<nav class="pull-right">
				<ul class="pagination pagination-sm">
					<?php if ($_smarty_tpl->tpl_vars['pages']->value>1) {?>
					<?php if ($_smarty_tpl->tpl_vars['current_page']->value>1) {?>
						<li><a href="/home/assortment?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;
if (isset($_smarty_tpl->tpl_vars['currcategory']->value)) {?>&categorie=<?php echo $_smarty_tpl->tpl_vars['currcategory']->value;
}?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					<?php } else { ?>
						<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['p']->step = 1;$_smarty_tpl->tpl_vars['p']->total = (int) ceil(($_smarty_tpl->tpl_vars['p']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['p']->step));
if ($_smarty_tpl->tpl_vars['p']->total > 0) {
for ($_smarty_tpl->tpl_vars['p']->value = 1, $_smarty_tpl->tpl_vars['p']->iteration = 1;$_smarty_tpl->tpl_vars['p']->iteration <= $_smarty_tpl->tpl_vars['p']->total;$_smarty_tpl->tpl_vars['p']->value += $_smarty_tpl->tpl_vars['p']->step, $_smarty_tpl->tpl_vars['p']->iteration++) {
$_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->iteration == 1;$_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration == $_smarty_tpl->tpl_vars['p']->total;?>
					<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['current_page']->value) {?>
					<li class="active"><a href="/home/assortment?page=$p<?php if (isset($_smarty_tpl->tpl_vars['currcategory']->value)) {?>&categorie=<?php echo $_smarty_tpl->tpl_vars['currcategory']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a></li>
					<?php } else { ?>
					<li><a href="/home/assortment?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;
if (isset($_smarty_tpl->tpl_vars['currcategory']->value)) {?>&categorie=<?php echo $_smarty_tpl->tpl_vars['currcategory']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a></li>
					<?php }?>
					<?php }} ?>
					<?php if ($_smarty_tpl->tpl_vars['pages']->value==$_smarty_tpl->tpl_vars['current_page']->value) {?>
					<li class="disabled"><a href="#">&raquo;</a></li>
					<?php } else { ?>
					<li><a href="/home/assortment?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;
if (isset($_smarty_tpl->tpl_vars['currcategory']->value)) {?>&categorie=<?php echo $_smarty_tpl->tpl_vars['currcategory']->value;
}?>">&raquo;</a></li>
					<?php }?>
					<?php }?>
				</ul>
			</nav>
		</div>
	</div>
</div><?php }} ?>
