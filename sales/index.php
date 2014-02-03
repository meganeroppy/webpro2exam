
<!DOCTYPE html>
<html>
<head>
	<title>売上一覧画面</title>
	<meta charset="utf-8"/>
</head>
<body>

	<?php
			try {

			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8;', 'root', '');
			    $stmt = $pdo->query('SELECT * FROM sales');

			    ?> <table>
			    <tr><th>売上ID</th><th>商品ID</th><th>販売日時</th><th>数量</th></tr> <?

			    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 

			    echo "<tr>";
   				echo "<td>{$row['id']}</td>";
   				echo "<td>{$row['product_id']}</td>";
   				echo "<td>{$row['sales_at']}</td>";
   				echo "<td>{$row['quantity']}</td>";
   				echo "</tr>";

			    } 

			    ?> </table> <?

			} catch (PDOException $e) {
			    var_dump($e->getMessage());
			}

			$pdo = null;

		
	?>


</body>
</html>