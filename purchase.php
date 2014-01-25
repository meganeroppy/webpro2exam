<?php
	if(!session_id()){
		session_start();
	}

	if(isset($_POST["id"])){
		$id = $_POST["id"];
	}

	echo "購入手続きが完了しました.（商品ID：{$id[0]}）";
	include "index.php";

