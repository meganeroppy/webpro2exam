<?php
	include "Sale.php";

	class SalesController{
		function __construct(){

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

		public function createAction($id){
			//echo "購入処理として Sale->save() を呼び出して購入データをデータベースに保存する。";
			$tmpArray =  array('id' => "_ID_", 'product_id' => $id, 'sales_at' => "_DATE_", 'quantity' => "_QUANTITY_");
			$this->sale = new Sale($tmpArray);
			$this->sale->save();
		}

}