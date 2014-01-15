<?php
	class SalesController{
		public function SalesController{

		}

		public  function indexAction(){
			echo "売上一覧画面を表示";
		}

		public function newAction(){
			echo "購入画面を表示";
		}

		public function createAction(){
			echo "購入処理として Sale#save を呼び出して購入データをデータベースに保存する。";
		}

}