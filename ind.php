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

/*function taxIn($tax01,$tax02){
    $sampl=$tax01 * 300,250;
    $sampl2=$tax02 * 2000,25600;
    return $sampl
}
*/
//echo 1000 * $tax01;   
/*echo $tax01 * 300,250 . "円<br>";*/


/*priceは税抜き価格となり
tax = 1 は軽減税率（8%）
tax = 2 は通常税率（10%）
の消費税となり
出力結果は下記のようになります。

オレンジは324円です。
りんごは270円です。
カバンは2200円です。
コートは28160円です。

利用するのは
・繰り返し処理
・条件分岐
・関数（税込価格の計算）

$price ='price'; 

/*function taxInn($price,$tax01){  //引数を1.08とにする。    
    $price1 = $price * $tax01; //税率８％
    echo   "は"  .  $price1 . "円です。<br>";
    }
// 関数を呼び出す
taxInn(300,1.08);
taxInn(250,1.08);

function taxIn($price,$tax02){  //引数をと1.1にする。    
    $price2 = $price * $tax02; //税率1.1％
    echo   "は"  .  $price2 . "円です。<br>";
    }
// 関数を呼び出す
taxIn(2000,1.1);
taxIn(25600,1.1); */

/*function taxInn($price){ //税抜価格
    $price1 = $price * $tax01; //税率８％
    $price2 = $price * $tax02; //税率1.1％
    return [$price1, $price2]; //税込価格
}


echo   "は"  .  $price1 . "円です。<br>";
echo   "は"  .  $price2 . "円です。<br>";
*/

/*function taxInn($tax01,$tax02){ 
    $tax01=1.08;
    $tax02=1.1; 

function taxInn($price,$tax01){
    return $price*$tax01;
}
echo  "オレンジは " .taxInn (300,$tax01). "円です。<br>";
echo  "りんごは " .taxInn (250,$tax01). "円です。<br>";

function taxIn($price,$tax02){
    return $price*$tax02;
}
echo  "カバンは " .taxIn (2000,$tax02). "円です。<br>";
echo  "コートは " .taxIn (25600,$tax02). "円です。<br>";*/

/*function taxInn($price,$tax){
    $zeikomi = $price*$tax;
    for( $i = 0; $i < count($items); $i++ ){
    if($items[$i]['tax']===1);//オレンジは324円です。りんごは270円です。//
    else ($items[$i]['tax']===2);//カバンは2200円です。コートは28160円です。//
   
    return $zeikomi;
    }
}

taxInn ($price*$tax);*/ 

function calculateTax($price, $tax) {
    if ($tax == 1) {
        return $price * 1.08; // 8% tax
    } elseif ($tax == 2) {
        return $price * 1.10; // 10% tax
    } else {
        return $price; // if no valid tax provided
    }
}

foreach ($items as $item) {
    $finalPrice = calculateTax($item['price'], $item['tax']);
    echo $item['name'] . "は" . round($finalPrice) . "円です。 <br>";
}

/*function Taxiin($tax01, $tax02) {
    if ($tax01 = 1.08) {
        return $price * $tax01; // 8% tax
    } elseif ($tax02 = 1.1) {
        return $price * $tax02; // 10% tax
    }
}

foreach ($items as $item) {
    $finalPrice = Taxiin($price,$tax01, $tax02);
    echo $item['name'] . 'は' . round($finalPrice) . '円です。' . PHP_EOL;
}*/

function taxiin($price, $tax, $tax01, $tax02) {
    if ($tax == 1) {
        return $price * $tax01; // 8% tax
    } elseif ($tax == 2) {
        return $price * $tax02; // 10% tax
    }
}

foreach ($items as $item) {
    $finalPrice = taxiin($item['price'], $item['tax'], $tax01, $tax02);
    echo $item['name'] . "は" . round($finalPrice) . "円です。<br>";
}


function calc($price,$tax) {
    if ($tax == 1) {
    return $price * 1.08;
    }
    elseif ($tax == 2) {
    return $price * 1.1;
    }
}
foreach ($items as $item) {
    $finalPrice = calc($item['price'], $item['tax']);
    echo $item['name'] . "は" . round($finalPrice) . "円です。<br>";
}







    