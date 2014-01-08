<?php
	class Product{


		void all(){
			echo "データベースから商品データを全て取得して返す。";
		}

		void load(int ID){
			echo "指定された ID の商品データのみをロードする。";
		}

	}
?>