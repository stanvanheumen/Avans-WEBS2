<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 13:47:57
         compiled from "app\view\partial\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94615501879252f6e1-92942258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eee7d3028f7f920040e2d732e3724681a9d2548c' => 
    array (
      0 => 'app\\view\\partial\\header.tpl',
      1 => 1426164473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94615501879252f6e1-92942258',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55018792568fe8_30056019',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55018792568fe8_30056019')) {function content_55018792568fe8_30056019($_smarty_tpl) {?><!DOCTYPE html>
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
  	</head>
  	
  	<body>
  		<!-- navigation -->
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="main-navbar-collapse">
					<ul class="nav navbar-nav">
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						
					</ul>
				</div>
			</nav>
		</div>
		<!-- /navigation -->
		
		<!-- logo -->
		<div class="container sm-vpadding">
			<div class="row">
				<div class="col-sm-3 logo">
					<a href="index.php"><img src="/assets/images/logo.png" class="img-responsive" width="235" height="46" alt="logo" /></a>
				</div>
				<div class="col-sm-9">
					<form action="search">
						<div class="input-group">
							<input type="search" class="form-control input-lg"
								name="search-query" id="search-query" placeholder="Zoeken in alle artikelen..." />
							<div class="input-group-btn">
								<button class="btn btn-lg btn-blue" type="submit" id="Search">
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
		<div class="container">
			<ol class="breadcrumb">
				
			</ol>
		</div>
		<!-- /navigation --><?php }} ?>
