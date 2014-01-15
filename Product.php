<?php
	class Product{


		public function all(){
//			echo "データベースから商品データを全て取得して返す。";
			try {
			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test_for_exam;charset=utf8;', 'root', '');
			    $stmt = $pdo->query('SELECT * FROM Products');

			    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			        echo implode(', ', $row) . PHP_EOL . '<br />';
			    }
			} catch (PDOException $e) {
			    var_dump($e->getMessage());
			}

			$pdo = null;			
		}

		public function load($ID : int){
//			echo "指定された ID の商品データのみをロードする。";
			try {
			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test_for_exam;charset=utf8;', 'root', '');
				    $stmt = $pdo->query('SELECT * FROM Products WHERE id = {$ID}');
			    }	

			    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			        echo implode(', ', $row) . PHP_EOL . '<br />';
			    }
			} catch (PDOException $e) {
			    var_dump($e->getMessage());
			}

			$pdo = null;	
			echo "ID = {$ID}";
		}

	}
?>