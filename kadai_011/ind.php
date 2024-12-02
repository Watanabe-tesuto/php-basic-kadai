<?php
$items = [
        [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
        [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
        [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
        [ 'name' => 'コート', 'price' => 25600, 'tax' => 2 ],
];

$tax01=1.08;
$tax02=1.1;

//priceは税抜き価格となり、tax = 1 は軽減税率（8%）tax = 2 は通常税率（10%）の消費税//
for( $i = 0; $i < count($items); $i++ ){
    if($items[$i]['tax']===1)//オレンジは324円です。りんごは270円です。//
	echo $items[$i]['name'] . "は"  .$items[$i]['price']*$tax01 . "円です。" . "<br>";
    else //カバンは2200円です。コートは28160円です。//
    echo $items[$i]['name'] . "は"  .$items[$i]['price']*$tax02 . "円です。" . "<br>";
}



