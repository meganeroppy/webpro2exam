<?php

/*

$ids  = array(1, 2, 3);
$names = array('スモールライト', 'どこでもドア', 'タイムふろしき');
$prices   = array(3500000, 24000000, 9000000);


try {
	
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test_for_exam;charset=utf8', 'root', '');
    $stmt = $pdo->prepare('INSERT INTO Products (id, name, price) values(:ID, :NAME, :PRICE)');

    for ($i = 0; $i < 3; $i++) {
        $stmt->bindValue(':ID',   $ids[$i]);
        $stmt->bindValue(':NAME',  $names[$i]);
        $stmt->bindValue(':PRICE',    $prices[$i]);
        $stmt->execute();
    }

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//        $model_data[$i] = implode(', ', $row);
        echo implode(', ', $row) . PHP_EOL . '<br />';
    }   
} catch (PDOException $e) {
    var_dump($e->getMessage());

}



$pdo = null;
*/



?>
<!DOCTYPE html>
<html>
<head>
	<title>商品一覧画面</title>
</head>
<body>
	
	
    <ul>
    <?php
 //       foreach ($model_data as $name) {
 	for($i = 1; $i <= 3; $i++){
  //          echo "<li>${model_data[$i]}</li>";
        }
    ?>
    </ul>
</body>
</html>