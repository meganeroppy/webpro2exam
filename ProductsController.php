<?php
	include "Product.php";
	class ProductsController{

		public static function indexAction(){
			echo "Product#all を呼び出し商品一覧を取得したら、products/index.php で一覧画面を表示する。";
			Product::all();

		}
	

    public function index() {

        $model_data = array('テレビ', '掃除機', '洗濯機');
        include('Products/index.php');
    }
}

$controller = new ProductsController();
$controller->index();
?>