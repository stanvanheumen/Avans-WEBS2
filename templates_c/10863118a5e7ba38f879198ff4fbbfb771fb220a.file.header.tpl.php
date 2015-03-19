<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-19 13:40:52
         compiled from "app\view\cms\partial\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106925505b3bb0c3596-43076651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10863118a5e7ba38f879198ff4fbbfb771fb220a' => 
    array (
      0 => 'app\\view\\cms\\partial\\header.tpl',
      1 => 1426768850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106925505b3bb0c3596-43076651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5505b3bb0f5518_07699633',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5505b3bb0f5518_07699633')) {function content_5505b3bb0f5518_07699633($_smarty_tpl) {?><!DOCTYPE html>
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
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	</head>

	<body style="background-color: #dfdfdf;">
	
	<?php if (isset($_SESSION['cms_authenticated'])&&$_SESSION['cms_authenticated']==1) {?>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/cms/dashboard">Webshop CMS</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/cms/dashboard">Dashboard</a></li>
					<li><a href="/cms/categories">Categorie&#235;n</a></li>
					<li><a href="/cms/products">Producten</a></li>
					<li><a href="/cms/orders">Bestellingen</a></li>
					<li><a href="/cms/users">Gebruikers</a></li>
				</ul>
				<div class="pull-right vertical-offset-7">
					<a href="/cms/logout" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-off" aria-hidden="true"></a>
				</ul>
			</div><!--/.nav-collapse -->
	  </div>
	</nav>
	<?php }?><?php }} ?>
