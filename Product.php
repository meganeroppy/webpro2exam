<?php
	class Product{


		public function all(){
			echo "データベースから商品データを全て取得して返す。";
		}

		public function load($ID : int){
			echo "指定された ID の商品データのみをロードする。";
			echo "ID = {$ID}";
		}

	}
?>