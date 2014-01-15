<?php

$ids  = array(2, 3, 4);
$names = array('kimchi', 'fried Chicken', 'avocado');
$prices   = array(350, 240, 90);

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test_for_exam;charset=utf8', 'root', '');
    $stmt = $pdo->prepare('INSERT INTO Products (id, name, price) values(:ID, :NAME, :PRICE)');

    for ($i = 0; $i < 3; $i++) {
        $stmt->bindValue(':ID',   $ids[$i]);
        $stmt->bindValue(':NAME',  $names[$i]);
        $stmt->bindValue(':PRICE',    $prices[$i]);
        $stmt->execute();
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
}

$pdo = null;
?>

<html>
<head>
	<title>TEST PAGE 2</title>
</head>
<body>
	<form action = "test.php">
		<button>WOULD YOU LIKE TO BACK??</button>

	</form>
</body>
</html>