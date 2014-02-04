<?php
	include_once "../ProductsController.php";
	include_once "../SalesController.php";

	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}

	if(isset($_POST["id"])){
		$id = $_POST["id"];
	}

	if(isset($_POST["quantity"])){
		$quantity = $_POST["quantity"];
	}

	if(isset($_GET["name"])){
		$name = $_GET["name"];
	}

	if(isset($_GET["price"])){
		$price = $_GET["price"];
	}

	if(isset($_POST["completed"])){
		if($_POST["completed"] == true){

			$salesController = new salesController();
			$salesController->createAction($id, $quantity);	//データベースに保存

			$completed = true;
		}else{
			$completed = false;
		}
	}else{
			$completed = false;
	}

?>



<? if($completed){ ?>
	<!-- 購入確定後 -->

		<h2>商品の購入が完了しました。</h2>
	<? echo "商品ID：{$id}"; ?>
	<form action="../index.php" method="POST">
		<input type="hidden" name="mode" value="index"></input>
		<button type="submit">商品一覧に戻る</button>
	</form>
<? } else { ?>
	<!-- 購入確定前 -->

<h1>商品詳細</h1>
<p>この商品を購入しますか？</p>
<form action="new.php" method="POST">
	<table>
		<tr><th>商品ID</th><th>商品名</th><th>価格</th><th>数量</th></tr>
		<tr><td><? echo $id; ?></td><td><? echo $name; ?></td><td><? echo $price . "円"; ?></td><td><input type="number"  min='0' size=2 name="quantity" value="1"></td></tr>
	</table>
	<input type="hidden" name="id" value="<? echo $id; ?>">
	<input type="hidden" name="completed" value=true>
	<a href="../index.php" name="mode" value="index"><button type=button>戻る</button></a>
	<button type="submit">購入を確定する</button>
</form>

<? } 


