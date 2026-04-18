<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step3. 独自のソート関数を作る
        function sort_2way($array, $order) {
            if ($order === TRUE) {
                echo '昇順にソートします。<br>';
                sort($array); // PHP標準関数：昇順ソート
            } else {
                echo '降順にソートします。<br>';
                rsort($array); // PHP標準関数：降順ソート
            }

            // ソートされた配列を1行ずつ表示
            foreach ($array as $value) {
                echo $value . '<br>';
            }
        }

        // Step4. ソート対象の配列を用意する
        $nums = [15, 4, 18, 23, 10];

        // Step5. 独自のソート関数を呼び出す（昇順）
        sort_2way($nums, TRUE);

        echo '<br>'; // 見やすくするための改行

        // Step5. 独自のソート関数を呼び出す（降順）
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>