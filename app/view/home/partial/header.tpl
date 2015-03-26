<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Stan van Heumen en Brian van den Broek">
		
		<title>{$title}</title>
		
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
										{foreach $categories as $cat}
										<li><a href="/home/assortment?categorie={$cat->getId()}">{$cat->getNaam()}</a></li>
										{/foreach}
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Muziek, Film en Games</li>
										<li class="divider"></li>
										{foreach $games as $game}
										<li><a href="/home/productdetails?product_id={$game->getId()}">{$game->getProductNaam()}</a></li>
										{/foreach}
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Computer en Elektronica</li>
										<li class="divider"></li>
										{foreach $computers as $computer}
										<li><a href="/home/productdetails?product_id={$computer->getId()}">{$computer->getProductNaam()}</a></li>
										{/foreach}
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Speelgoed</li>
										<li class="divider"></li>
										{foreach $toys as $toy}
										<li><a href="/home/productdetails?product_id={$toy->getId()}">{$toy->getProductNaam()}</a></li>
										{/foreach}
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						{if isset($smarty.session.home_authenticated) && $smarty.session.home_authenticated == 1}
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{if isset($user_name)}
								{$user_name} <span class="caret"></span>
								{/if}
							</a>
							<ul class="dropdown-menu account-menu" role="menu">
								<li><a href="/home/account">Winkelwagentje</a></li>
								<li class="divider"></li>
								<li><a href="/home/logout">Log uit</a></li>
							</ul>
						</li>
						{else}
						<li><a href="/home/login">Inloggen</a></li>
						<li><a href="/home/register">Registreren</a></li>
						{/if}
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
				{if $title != "Home"}
				<li><a href="/home/">Home</a></li>
				{/if}
				<li class="active">{$title}</li>
			</ol>
			<!-- /breadcrumbs -->
		</div>