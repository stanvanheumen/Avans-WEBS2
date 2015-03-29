<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-29 17:02:54
         compiled from "app\view\home\partial\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77935505b2f8b41789-34681639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bddf610982e41b70ea2587fd68fb1d1cf1f21d78' => 
    array (
      0 => 'app\\view\\home\\partial\\header.tpl',
      1 => 1427635410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77935505b2f8b41789-34681639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5505b2f8f35539_67315525',
  'variables' => 
  array (
    'title' => 0,
    'categories' => 0,
    'cat' => 0,
    'index' => 0,
    'productsarray' => 0,
    'product' => 0,
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5505b2f8f35539_67315525')) {function content_5505b2f8f35539_67315525($_smarty_tpl) {?><!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Stan van Heumen en Brian van den Broek">
		
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<div class="container">
			<!-- navigation -->
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/home/index"><img src="/assets/images/logo.png" class="img-responsive" width="150" height="30" alt="logo" /></a>
				</div>

				<div class="collapse navbar-collapse js-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown mega-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Assortiment <span class="glyphicon glyphicon-chevron-down"></span></a>			
							<ul class="dropdown-menu mega-dropdown-menu row">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header"><a href="/home/assortment">Alle Categorie&euml;n</a></li>
										<li class="divider"></li>
										<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
										<li><a href="/home/assortment?categorie=<?php echo $_smarty_tpl->tpl_vars['cat']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNaam();?>
</a></li>
										<?php } ?>
									</ul>
								</li>
								<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 0, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header"><a href="/home/assortment?categorie=<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['index']->value]->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['index']->value]->getNaam();?>
</a></li>
										<li class="divider"></li>
										<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsarray']->value[$_smarty_tpl->tpl_vars['index']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
										<li><a href="/home/productdetails?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->getProductNaam();?>
</a></li>
										<?php } ?>
									</ul>
								</li>
								<?php }} ?>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<?php if (isset($_SESSION['home_authenticated'])&&$_SESSION['home_authenticated']==1) {?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<?php if (isset($_smarty_tpl->tpl_vars['user_name']->value)) {?>
								<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
 <span class="caret"></span>
								<?php }?>
							</a>
							<ul class="dropdown-menu account-menu" role="menu">
								<?php if (isset($_SESSION['shoppingcart'])) {?>
								<li><a href="/home/account">Winkelwagentje (<?php echo count($_SESSION['shoppingcart']);?>
)</a></li>
								<?php } else { ?>
								<li><a href="/home/account">Winkelwagentje (0)</a></li>
								<?php }?> 
								<li><a href="/home/orders">Bestellingen</a></li>
								<li class="divider"></li>
								<li><a href="/home/logout">Log uit</a></li>
							</ul>
						</li>
						<?php } else { ?>
						<li><a href="/home/login">Inloggen</a></li>
						<li><a href="/home/register">Registreren</a></li>
						<?php }?>
					</ul>
				</div>
			</nav>
			<!-- /navigation -->

			<!-- logo -->
			<div class="sm-vpadding">
				<div class="row">
					<div class="col-sm-12">
						<form action="/home/search">
							<div class="input-group">
								<input type="search" class="form-control input-lg search-input" name="search-query" id="search-query" placeholder="Zoeken in alle artikelen..." />
								<div class="input-group-btn">
									<button class="btn btn-lg btn-primary" type="submit" id="Search">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /logo -->

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<!-- TODO: Add breadcrumb trail here. -->
				<?php if ($_smarty_tpl->tpl_vars['title']->value!="Home") {?>
				<li><a href="/home/">Home</a></li>
				<?php }?>
				<li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
			</ol>
			<!-- /breadcrumbs -->
		</div><?php }} ?>
