<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php 
    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10 ];
    //ソート関数を用いると、昇順（増えていく順序）・降順（減っていく順序）
    function sort_2way($array, $order){
        if ($order) {
        echo '昇順にソートします。<br>';
        sort ($array);
        }
        else {
        echo '降順にソートします。<br>';
        rsort ($array);                
        }  
    //配列の値を出力
        foreach ($array as $value) {
        echo $value .'<br>';
        }
    }

    //関数呼び出し
    sort_2way($nums,true);
    sort_2way($nums,false);
    ?>
    </p>
</body>

</html>
