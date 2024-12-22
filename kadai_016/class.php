<?php

// Foodクラスの定義
class Food {
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price() {
        echo "Price: {$this->price}円\n";
    }
}

// Animalクラスの定義
class Animal {
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    public function show_height() {
        echo "Height: {$this->height} cm\n";
    }
}

// Foodクラスのインスタンスを生成
$apple = new Food("Apple", 150);
$banana = new Food("Banana", 120);

// Animalクラスのインスタンスを生成
$elephant = new Animal("Elephant", 300, 5000);
$giraffe = new Animal("Giraffe", 500, 1200);

// インスタンスの詳細を出力
print_r($apple);
$apple->show_price();

print_r($banana);
$banana->show_price();

print_r($elephant);
$elephant->show_height();

print_r($giraffe);
$giraffe->show_height();

?>
