<?php
const TAX = 0.1;

// 商品の連装配列を用意する
$product = ["鉛筆" => 100,"消しゴム" => 150,"物差し" => 500,
];


// 計算する関数を定義する
function calculate( $array, $tax ) {
  foreach( $array as $key => $val ) {
    $price = $val + $val * $tax;
    echo "$key の税込価格は $price 円です。";
  }
}

// 関数を実行（呼び出し）する
calculate( $product, TAX );

?>

