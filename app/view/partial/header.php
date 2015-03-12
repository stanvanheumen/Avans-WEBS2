<!-- {php} -->
<?php 
error_reporting(E_ALL ^ E_STRICT);

$left_menu = array (
	0 => array (
			'name' => 'Home',
			'page' => '/home/index'
	),
	1 => array (
			'name' => 'Assortiment',
			'page' => '/home/assortment'
	)
);

$right_menu = array (
	0 => array (
			'name' => 'Registreren',
			'page' => '/home/register'
	),
	1 => array (
			'name' => 'Inloggen',
			'page' => '/home/login'
	)
);

function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
	$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
	$base = ('http') . '://' . $_SERVER['HTTP_HOST'] . '/';
	$breadcrumbs = Array("<li><a href=\"" . $base . "ICT/bcfbroek/\">$home</a></li>");
	$last = end(array_keys($path));
	foreach ($path AS $x => $crumb) {
		$title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));
		if($title == 'ICT' || $title == 'Bcfbroek') {
			continue;
		}
		if ($x != $last) {
			$breadcrumbs[] = "<li><a href=\"$base$crumb\">$title</a></li>";
		} else {
			$breadcrumbs[] = "<li class=\"breadcrumbs\">$title</li>";
		}
		$base .= $crumb . '/';
	}
	return implode($separator, $breadcrumbs);
}
?>
<!-- {/php} -->

<!DOCTYPE html>
<html lang="nl">
	<head>
  		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Groep L">
		
		<title><?php echo $_SESSION['title'] . " - WebShop"; ?></title>
		
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  	</head>
  	
  	<body>
  		<!-- {navigation} -->
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
						<?php
						foreach ( $left_menu as &$menuItem ) {
							$menuTitle = $menuItem['name'];
							$menuPage = $menuItem['page'];
							$class = $menuTitle == $_SESSION['title'] ? " class=\"active\"" : "";
							echo "<li$class><a href=\"$menuPage\">$menuTitle</a>";
						}
						?>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php
						foreach ( $right_menu as &$menuItem ) {
							$menuTitle = $menuItem['name'];
							$menuPage = $menuItem['page'];
							$class = $menuTitle == $_SESSION['title'] ? " class=\"active\"" : "";
							echo "<li$class><a href=\"$menuPage\">$menuTitle</a>";
						}
						?>
					</ul>
				</div>
			</nav>
		</div>
		<!-- {/navigation} -->
		
		<!-- {logo} -->
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
		<!-- {/logo} -->
		
		<!-- {breadcrumbs} -->
		<div class="container">
			<ol class="breadcrumb">
				<?php echo breadcrumbs(''); ?>
			</ol>
		</div>
		<!-- {/navigation} -->