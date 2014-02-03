<?php
/*
try {
	
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8', 'root', '');
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
    <h1>商品一覧</h1>
    <p>購入する商品を選択してください</p>
	
    <ul>
    <?php for($i = 1 ; $i < sizeof($array[1]) ; $i++) { ?>
        <a href="sales/new.php?id=<? echo $id[$i]; ?>&name=<? echo $name[$i]; ?>&price=<? echo $price[$i]; ?>"><p><? echo $name[$i]; ?></p></a>
    <? } ?>
    </ul>

</body>
</html>