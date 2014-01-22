<?php
	
	include "Product.php";

	class ProductsController{

		function __construct(){
			$this->product = new Product();

		}		

		public function indexAction(){
			//echo "ProductsController::indexAction()<br>";
			//echo "Product#all を呼び出し商品一覧を取得したら、Products/index.php で一覧画面を表示する。";

			$this->product->all();
	        include "Products/index.php";
		}
	

    public function index() {

        $model_data = array('テレビ', '掃除機', '洗濯機');
    }
}



?>