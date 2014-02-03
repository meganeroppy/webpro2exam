<?php

class Sale {

    private $id;
    private $product_id;
    private $sales_at;
    private $quantity;

    public function __construct($params) {
        $this->id         = isset($params['id']) ? $params['id'] : null;
        $this->product_id = isset($params['product_id']) ? $params['product_id'] : null;
        $this->sales_at   = isset($params['sales_at']) ? $params['sales_at'] : null;
        $this->quantity   = isset($params['quantity']) ? $params['quantity'] : null;
        //echo "sale class　に保存されました(id = {$this->id}, product_id = {$this->product_id}, sales_at = {$this->sales_at}, quantity = {$this->quantity})";
    }

    public function all() {
		//echo "Sale::all();データベースから全ての売上データを取得して返す。<br>";
        echo "<h1>売上一覧</h1>";

        try {

            $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8;', 'root', '');
            $stmt = $pdo->query('SELECT * FROM sales');

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo implode(', ', $row) . PHP_EOL . '<br />';
            }
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }

        $pdo = null;

    }

    public function save() {
		//echo "自分自身のデータをデータベースに保存する。";

        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8', 'root', '');
            $stmt = $pdo->prepare('INSERT INTO  sales(id, product_id, sales_at, quantity) values(:ID, :PRODUCT_ID, :SALES_AT, :QUANTITY)');

                $stmt->bindValue(':ID',   $this->id);
                $stmt->bindValue(':PRODUCT_ID',  $this->product_id);
                $stmt->bindValue(':SALES_AT',    $this->sales_at);
                $stmt->bindValue(':QUANTITY',    $this->quantity);
                $stmt->execute();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }

        $pdo = null;

        //CREATE TABLE sales(
        //id integer primary key AUTO_INCREMENT,
        //something to execute
        //);

        
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getProductId() {
        return $this->product_id;
    }

    public function setProductId($product_id) {
        $this->product_id = $product_id;
    }

    public function getSalesAt() {
        return $this->sales_at;
    }

    public function setSalesAt($sales_at) {
        $this->sales_at = $sales_at;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

}