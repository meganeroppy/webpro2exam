<?php
	include "Sale.php";

	class SalesController{
		function __construct(){
//			$this->product = new Product();
		}

		public function indexAction(){
			
			//売上を読み込み
			$this->tmpArray = Sale::all();
						
			//商品IDを商品名に置き換え & 合計価格を価格と数量から計算
			for($i = 1;$i <sizeof($this->tmpArray) + 1; $i++){
				$tmp = Product::load($this->tmpArray[$i][1]);
				$this->tmpArray[$i][1] = $tmp['name'];

				$this->tmpArray[$i][4] = $this->tmpArray[$i][3] * $tmp['price'];
			}

			include_once "Sales/index.php";
		}

		public function newAction(){
			//echo "購入画面を表示";
			include_once "Sales/new.php";
		}

		public function createAction($id, $quantity){
			$tmpArray =  array('id' => "_ID_", 'product_id' => $id, 'sales_at' => "_DATE_", 'quantity' => $quantity);
			$this->sale = new Sale($tmpArray);
			$this->sale->save();
		}

}