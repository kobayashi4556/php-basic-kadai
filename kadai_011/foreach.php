<?php
// Step2. 連想配列を作成し、変数に代入する
$onion_data = [
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道',
];

// Step3. foreach文を使い、キーと値を出力する
foreach ($onion_data as $key => $value) {
    echo "{$key} : {$value}<br>";
}
?>