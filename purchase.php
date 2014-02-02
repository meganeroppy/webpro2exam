<?php
	if(!session_id()){
		session_start();
	}

	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}

	if(isset($_GET["name"])){
		$name = $_GET["name"];
	}

	if(isset($_GET["price"])){
		$price = $_GET["price"];
	}

	if(isset($_POST["completed"])){
		$completed = true;
	}
?>
<h1>商品詳細</h1>

<? if($completed){ ?>
		<h2>商品の購入が完了しました。</h2>
	<? echo "商品ID：{$product_id}"; ?>
	<form action="../index.php" method="POST">
		<input type="hidden" name="mode" value="index"></input>
		<button type="submit">商品一覧に戻る</button>
	</form>
<? } else { ?>

<p>この商品を購入しますか？</p>


<form action="sales/new.php" method="POST">
	<table>
		<tr><th>商品ID</th><th>商品名</th><th>価格</th><th>数量</th></tr>
		<tr><td><? echo $id; ?></td><td><? echo $name; ?></td><td><? echo $price; ?></td><td><input type="number"  min='0' size=2 name="quantity" value="1"></td></tr>
	</table>
	<input type="hidden" name="product_id" value="<? echo $id; ?>">
	<button type="submit">購入を確定する</button>
</form>

<? } 


