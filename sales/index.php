<?php
	require_once("../SalesController.php");
//	$controller = new SalesController();
?>

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
	//	$controller::indexAction();
	SalesController::indexAction();
	?>

<form action = "../index.php">
   	<button type="submit">Back To Start Page</button>
</form>
</body>
</html>