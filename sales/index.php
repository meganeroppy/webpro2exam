<!DOCTYPE html>
<html>
<head>
	<title>売上一覧画面</title>
	<meta charset="utf-8"/>
</head>
<body>

	<a href="../Products/index.php"><h4>商品一覧</h4></a>
	<h4>売上一覧</h4>

<?php

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

?>

<form >

</form>
</body>
</html>