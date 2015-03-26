<?php

class Api extends Controller {

	public function index() {
		
	}
	
	public function search() {
		if(!isset($_GET['limit']) || !is_numeric($_GET['limit']) || $_GET['limit'] < 0 || !isset($_GET['filter'])) {
			die();
		}
		
		require_once ('app/model/product.inc.php');
		
		$limit = $this->db->escape($_GET['limit']);
		if($limit > 20) {
			// keep resources low
			$limit = 20;
		}
		$filter = $this->db->escape($_GET['filter']);
		
		//$products = $this->db->queryArray("SELECT * FROM product WHERE productnaam LIKE '%$filter%' AND zichtbaar = 1 LIMIT $limit", 'Product');
		$products = $this->db->queryArray("SELECT p.*, link FROM product AS p INNER JOIN productafbeelding AS pa ON p.id = pa.product_id AND pa.afbeeldingtype_type = 'thumbnail' WHERE productnaam LIKE '%$filter%' AND zichtbaar = 1 LIMIT $limit", 'Product');
		
		$arr = array();
		
		foreach($products as $product) {
			$arr[] = array( "id" => $product->getId(), "name" => $product->getProductNaam(), "thumb_link" => $product->link);
		}
		
		echo json_encode($arr);
	}
	
	public function compareproduct() {
		// fetch user input
		$map = array();
		$ids = array();
		if(!isset($_GET['product1']) || !is_numeric($_GET['product1'])) {
			die();
		}
		$map[$_GET['product1']] = 'product1';
		$ids[] = $_GET['product1'];
		if(isset($_GET['product2'])) {
			if(!is_numeric($_GET['product2'])) {
				die();
			}
			$map[$_GET['product2']] = 'product2';
			$ids[] = $_GET['product2'];
		}
		if(isset($_GET['product3'])) {
			if(!is_numeric($_GET['product3'])) {
				die();
			}
			$map[$_GET['product3']] = 'product3';
			$ids[] = $_GET['product3'];
		}
		
		// query the database...
		
		require_once ('app/model/product.inc.php');
		
		$idCollection = "('" . implode("','", $ids). "')";
		
		//$products = $this->db->queryArray("SELECT p.*, pa.link, ps.specificatie, ps.waarde FROM product AS p INNER JOIN productafbeelding AS pa ON p.id = pa.product_id AND pa.afbeeldingtype_type = 'thumbnail' LEFT JOIN productspecificatie AS ps ON ps.product_id = p.id WHERE p.id IN (3, 4) AND zichtbaar = 1'", 'Product');
		$products = $this->db->queryArray("SELECT p.*, pa.link FROM product AS p INNER JOIN productafbeelding AS pa ON p.id = pa.product_id AND pa.afbeeldingtype_type = 'thumbnail' WHERE p.id IN $idCollection AND zichtbaar = '1'", 'Product');
		
		
		$arr = array();
		
		$names = array('names' => array());
		$prices = array('prices' => array());
		$thumbnails = array('thumbnails' => array());
		
		
		// fetch basic data
		foreach($products as $product) {
			$p = $map[$product->getId()];
			//$names['names'][] = array( $p => $product->getProductNaam() );
			$names['names'][$p] = $product->getProductNaam();
			$prices['prices'][$p] = $product->getPrijs();
			$thumbnails['thumbnails'][$p] = $product->link;
		}
		
		$arr[] = $names;
		$arr[] = $thumbnails;
		$arr[] = $prices;
		
		// fetch specifications
		
		echo json_encode($arr);
	}
	
	public function error() {
		echo json_encode(array("error" => "404"));
	}
	
}