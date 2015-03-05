<?php 
error_reporting(E_ALL ^ E_STRICT); // geen strict...

require_once ('inc/database.php');
require_once ('model/categorie.inc.php');
require_once ('model/product.inc.php');

$db = new db ();
$db->connect ();

$search_category = false;

if (isset ( $_GET ['categorie'] ) && is_numeric ( $_GET ['categorie'] )) {
	$search_category = $db->queryObject ( "SELECT * FROM categorie WHERE id='" . $db->escape ( $_GET ['categorie'] ) . "'", 'Categorie' );
}
?>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#main-navbar-collapse">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="main-navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="producten.php">Producten</a></li>
				<li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorie&euml;n <span class="caret"></span></a>
                	<ul class="dropdown-menu" role="menu">
						<?php	
						$items = $db->queryArray ( "SELECT * FROM categorie ORDER BY naam", 'Categorie' );
						
						foreach ($items as $category) {
							$naam = $category->getNaam();
							$id = $category->getId();
							echo "<li><a href=\"producten.php?categorie=$id\">$naam</a></li>\n";
						}
						?>
                	</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="register.php">Registeren</a></li>
				<li><a href="#">Inloggen</a></li>
			</ul>
		</div>
	</nav>
</div>
<div class="container sm-vpadding">
	<div class="row">
		<div class="col-sm-3 logo">
			<a href="index.php"><img src="assets/images/logo.png" class="img-responsive" width="235" height="46" alt="logo" /></a>
		</div>
		<div class="col-sm-9">
			<form>
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
<div class="container">
	<ol class="breadcrumb">
 		<!--<li><a href="#">Home</a></li>
  		<li><a href="#">Library</a></li>
  		<li class="active">Data</li>-->
		<?php echo breadcrumbs(''); ?>
	</ol>
</div>
<?php
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