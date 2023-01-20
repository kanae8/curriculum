<?php
#step1:フルーツと単価の連想配列を作成してください。
$fruits=["リンゴ" =>300,"みかん" =>150,"桃" =>900];

#配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
$number=[1,3,2];
#step2:単価を計算する関数を定義してください。
function fruits($price,$amount){
  echo "は".$price*$amount."円です。";
  }
#引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。

#step3:繰り返しを使ってそれぞれのフルーツを書き出してください。
$count=0;
foreach($fruits as $key=>$value){
  echo $key;
  fruits($value,$number[$count]);
  echo "\n";
  $count++;
}


?>