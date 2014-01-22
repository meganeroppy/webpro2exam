<?php
	include "Sale.php";

	class SalesController{
		function __construct(){
			$tmpArray =  array('id' => 1, 'product_id' => 1, 'sales_at' => "Tokyo", 'quantity' => 10);
			$this->sale = new Sale($tmpArray);
		}

		public function indexAction(){
			//echo "SalesController.indexAction();売上一覧画面を表示<br>";
			include_once "Sales/index.php";
			//Sale::all();
		}

		public function newAction(){
			//echo "購入画面を表示";
			include_once "Sales/new.php";

		}

		public function createAction(){
			echo "購入処理として Sale#save を呼び出して購入データをデータベースに保存する。";
			$this->sale->save();
		}

}