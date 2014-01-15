<?php
	include "Sale.php";

	class SalesController{
		public function SalesController(){

		}

		public static function indexAction(){
			echo "SalesController.indexAction();売上一覧画面を表示<br>";
			Sale::all();
		}

		public static function newAction(){
			echo "購入画面を表示";
		}

		public static function createAction(){
			echo "購入処理として Sale#save を呼び出して購入データをデータベースに保存する。";
			Sale::save();
		}

}