<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-18 10:18:27
         compiled from "app\view\cms\partial\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24025506b8ab21e771-22816099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808ccda9db0087e3f2c7d6510128a098fad29150' => 
    array (
      0 => 'app\\view\\cms\\partial\\header.tpl',
      1 => 1426670284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24025506b8ab21e771-22816099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5506b8ab25a4b9_25451235',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5506b8ab25a4b9_25451235')) {function content_5506b8ab25a4b9_25451235($_smarty_tpl) {?><!DOCTYPE html>
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
					<li><a href="/cms/products">Producten</a></li>
					<li><a href="/cms/users">Gebruikers</a></li>
				</ul>
				<div class="pull-right vertical-offset-7">
					<a href="/cms/logout" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-off" aria-hidden="true"></a>
				</ul>
			</div><!--/.nav-collapse -->
	  </div>
	</nav>
	<?php }?><?php }} ?>