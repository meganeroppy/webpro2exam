
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