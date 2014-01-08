商品一覧画面のテンプレート
<!DOCTYPE html>
<html lang="ja">
<body>
    <ul>
    <?php
        foreach ($model_data as $name) {
            echo "<li>${name}</li>";
        }
    ?>
    </ul>
</body>
</html>