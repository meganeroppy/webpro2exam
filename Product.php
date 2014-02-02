<?php
class Product{

		function __construct(){
			//echo "Product::Constructor<br>";
		}

		function __destruct(){
			//echo "Product::Destructor<br>";
		}

		public function all(){
			//echo "データベースから商品データを全て取得して返す。";
			echo "<h1>商品一覧</h1>";


			try {



			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8;', 'root', '');
			    $stmt = $pdo->query('SELECT * FROM Products');


			    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
//			    <?php echo implode(', ', $row) . PHP_EOL . '<br />'; ?>
			
   				<a href="sales/new.php?id=<? echo $row['id']; ?>&name=<? echo $row['name']; ?>&price=<? echo $row['price']; ?>"  ><p><? echo $row['name']; ?></p></a>

			    <? } 



			} catch (PDOException $e) {
			    var_dump($e->getMessage());
			}

			$pdo = null;			
		}

		public function load($ID){
//			echo "指定された ID の商品データのみをロードする。";
			try {
			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test_for_exam;charset=utf8;', 'root', '');
				    $stmt = $pdo->query('SELECT * FROM Products WHERE id = {$ID}');
			    	

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

		//echo " -- Products.php : has been defined --<br>";

?>