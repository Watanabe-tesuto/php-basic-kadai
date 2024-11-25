<?php
$items = [
    [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
    [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
    [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
];

// foreach文とecho文を使ってキーと値を出力
//オレンジ
//りんご
//カバンを出力
foreach ($items as $key => $value) {
    echo  $value['name'] . "<br>"; // コロン（：）で区切り、改行する
}

//オレンジは300円です。
//りんごは250円です。
//カバンは2000円です。を出力
foreach ($items as $key => $value) {
    echo $value['name'] . "は" . $value['price'] . "円です。". "<br>";
}







 

