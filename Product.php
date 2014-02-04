<?php
class Product{

		protected $id = Array();
		protected $name = Array();
		protected $price = Array();
		protected $numOfKind = 1;


		function __construct(){
		//	echo "Product::Constructor<br>";
		}

		function __destruct(){
		//	echo "Product::Destructor<br>";
		}

		public function all(){
			//echo "データベースから商品データを全て取得して返す。";
			
			try {

			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8;', 'root', '');
			    $stmt = $pdo->query('SELECT * FROM Products');

			    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 

   				$this->id[$this->numOfKind] = $row['id'];
   				$this->name[$this->numOfKind] = $row['name'];
   				$this->price[$this->numOfKind] = $row['price'];
   				$this->numOfKind++;

			    } 

			} catch (PDOException $e) {
			    var_dump($e->getMessage());
			}

			$pdo = null;

			return array($this->id, $this->name, $this->price);		
		}

		public static function load($ID){
			//echo "指定された ID の商品データのみをロードする。";
			$productData = array();
			try {
			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8;', 'root', '');
				   $stmt = $pdo->query('SELECT * FROM Products');
			   
			    	
			    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			    	if($row['id'] == $ID){
			        	$productData = $row;
					}
			    }
			    
			} catch (PDOException $e) {
			    var_dump($e->getMessage());
			}

			$pdo = null;	

			return $productData;
		}

	}

?>