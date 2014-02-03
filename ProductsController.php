<?php
	
	include "Product.php";

	class ProductsController{

		function __construct(){
			$this->product = new Product();

		}		

		public function indexAction(){
			//echo "Product#all を呼び出し商品一覧を取得したら、Products/index.php で一覧画面を表示する。";

			$array = $this->product->all();

			$id = $array[0];
			$name = $array[1];
			$price = $array[2];
	        include "Products/index.php";
		}
	
}



?>