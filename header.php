<?php 
error_reporting(E_ALL ^ E_STRICT); // geen strict...

?>

<nav class="navbar navbar-default">
	<div class="container">
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
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="register.php">Registeren</a></li>
				<li><a href="#">Inloggen</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
<?php echo breadcrumbs(); ?>

</div>
<div class="custom-container">
	<div class="container">
		<div class="row">
			<div class="col-md-5 logo"></div>
			<div class="col-md-8 custom-search">
				<form>
					<div class="input-group">
						<input type="search" class="form-control input-lg"
							name="search-query" id="search-query" placeholder="Zoeken..." />
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
</div>

<?php
function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $base = ('http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $breadcrumbs = Array("<a href=\"" . $base . "ICT/bcfbroek/\">$home</a>");
    $last = end(array_keys($path));
    foreach ($path AS $x => $crumb) {
        $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));
        if($title == 'ICT' || $title == 'Bcfbroek') {
        	continue;
        }
        if ($x != $last) {
            $breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
        } else {
            $breadcrumbs[] = $title;
        }
        $base .= $crumb . '/';
    }
    return implode($separator, $breadcrumbs);
 }
?>