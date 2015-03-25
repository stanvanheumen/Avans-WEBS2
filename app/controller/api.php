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
	
	public function error() {
		echo json_encode(array("error" => "404"));
	}
	
}