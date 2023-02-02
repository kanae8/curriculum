<?php
$number=$_POST['number'];
if($number!=""){
  $numberArray=str_split($number);
  $count=count($numberArray);
  $randnum=rand(0,$count-1);
  $select=$numberArray[$randnum];
  $date=date("Y/m/d",time());
  echo '<p>'.$date."の運勢は".'</p><br>';
  echo '<p>'."選ばれた数字は".$select.'</p><br>';
  echo '<p>';
  if($select==0){
    echo "凶";
  }elseif($select<=3){
    echo "小吉";
  }elseif($select<=6){
    echo "中吉";
  }elseif($select<=8){
    echo "吉";
  }elseif($select==9){
    echo "大吉";
  }else{
    echo "エラーです。";
  }
  echo '</p>';
}else{
  try{
    throw new Exception('数字が入力されていません。');
  }catch(Exception $e){
    echo '<p>'.$e->getMessage().'</p><br>';
  }
}
?>