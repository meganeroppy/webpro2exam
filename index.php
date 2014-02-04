<?php

	include_once "ProductsController.php";
	include_once "SalesController.php";
	$productsController = new ProductsController();
	$salesController = new SalesController();

?>
<html>
<head>
	<title>Start Page For Shopping</title>
</head>
<body>
	<table>
		<td>
			<form action = "index.php" method="POST">
				<input type="hidden" name="mode" value="index">
				<button type="submit">商品一覧</button>
			</form>
		</td>
		<td>
			<form action = "index.php" method="POST">
				<input type="hidden" name="mode" value="sales">
				<button type="submit">売上一覧</button>
			</form>
		</td>
	</table>

	<?php
	
	if(!isset($_POST["mode"]) || $_POST["mode"] == "index"){
		$productsController->indexAction();

	}else if($_POST["mode"] == "sales"){
		
		$salesController->indexAction();
	}
	
	?>
</body>
</html>