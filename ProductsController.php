<?php
	class ProductsController{
	//	public function indexAction(){
	//		echo "Product#all を呼び出し商品一覧を取得したら、products/index.php で一覧画面を表示する。";
	//	}
	

    public function index() {
        // 何かの処理...

        $model_data = array('テレビ', '掃除機', '洗濯機');
        include('views/products/index.php');
    }
}

$controller = new ProductsController();
$controller->index();
?>