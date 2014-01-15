<?php

	echo "<h2>This is a test page</h2>";
/////////////////////////

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

////////////
?>

<html>
<head>
	<title>TEST PAGE</title>
	<meta charset = "utf-8" /> 
</head>
<body>
	<form action = "test2.php">
		<button>WOULD YOU LIKE TO ADD CARAM TO THE DATEBASE TEST_FOR_EXAM??</button>

	</form>

</body>
</html>