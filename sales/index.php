<!DOCTYPE html>
<html>
<head>
	<title>売上一覧画面</title>
	<meta charset="utf-8"/>
</head>
<body>

	<?php
/*
			try {

			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8;', 'root', '');
			    $stmt = $pdo->query('SELECT * FROM sales');

			    ?> <table>
			    <tr><th>販売日時</th><th>商品名</th><th>数量</th><th>合計</th></tr> <?

			    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 

			    echo "<tr>";
			    echo "<td>{$row['sales_at']}</td>";
   				echo "<td align=center>{$row['product_id']}</td>";
   				echo "<td align=center>{$row['quantity']}</td>";
   				echo "</tr>";

			    } 

			    ?> </table> <?

			} catch (PDOException $e) {
			    var_dump($e->getMessage());
			}

			$pdo = null;
*/
			try {




			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2_exam;charset=utf8;', 'root', '');
			    $stmt = $pdo->query('SELECT * FROM sales');

			    ?> <table>
			    <tr><th>販売日時</th><th>商品名</th><th>数量</th><th>合計</th></tr> <?

				  for($i = 1; $i < sizeof($this->tmpArray)+1 ;$i++){
				    echo "<tr>";
				    echo "<td>{$this->tmpArray[$i][2]}</td>";
	   				echo "<td align=center>{$this->tmpArray[$i][1]}</td>";
	   				echo "<td align=center>{$this->tmpArray[$i][3]}</td>";
	   				echo "<td align=center>{$this->tmpArray[$i][4]}</td>";

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