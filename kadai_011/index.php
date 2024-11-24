<?php
$items = [
    [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
    [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
    [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
];

$sample = [
    'サンプル1',
    'サンプル2',
    'サンプル3'
];

// foreach文とecho文を使ってキーと値を出力
foreach ($sample as $key => $value) {
    echo  $value . "<br>"; // コロン（：）で区切り、改行する
}


// foreach文とecho文を使ってキーと値を出力
foreach ($items as $key => $value) {
    echo  $value['name'] . "<br>"; // コロン（：）で区切り、改行する
}

foreach ($items as $key => $value) {
    echo  $value['price'] . "<br>"; // コロン（：）で区切り、改行する
}

foreach ($items as $key => $value) {
    echo $value['name'] . " " . $value['price'] . "\n". "<br>";
}


if(true) echo('オレンジ'); 
else if(false) echo('りんご');
else echo(' ');

    


 






