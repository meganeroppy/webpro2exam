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
    }

    public static function all() {
        echo "<h1>売上一覧</h1>";

        $tmpArray = array();
        $i = 1;

        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8;', 'root', '');
            $stmt = $pdo->query('SELECT * FROM sales' );

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $tmpArray[$i][0] = $row["id"];
                $tmpArray[$i][1] = $row["product_id"];
                $tmpArray[$i][2] = $row["sales_at"];
                $tmpArray[$i][3] = $row["quantity"];
                $tmpArray[$i][4] = 0;
                $i++;
            }
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }

        $pdo = null;

        return $tmpArray;

    }

    public function save() {
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8', 'root', '');
            $stmt = $pdo->prepare('INSERT INTO  sales(id, product_id, sales_at, quantity) values(:ID, :PRODUCT_ID, :SALES_AT, :QUANTITY)');

                $stmt->bindValue(':ID',   $this->id);
                $stmt->bindValue(':PRODUCT_ID',  $this->product_id);
                $stmt->bindValue(':SALES_AT',    date('c'));
                $stmt->bindValue(':QUANTITY',    $this->quantity);
                $stmt->execute();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }

        $pdo = null;

        $this->id++;

        echo "売上ID　:" . $this->getId();

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