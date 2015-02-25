<?php

require_once('inc/database.php');
require_once('model/categorie.inc.php');

$db = new db();
$db->connect();

$items = $db->queryArray("SELECT * FROM categorie", 'Categorie');

foreach($items as $category) {
	echo $category->getNaam() . "<br/>";
}
