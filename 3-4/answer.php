<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function correctAnswer($j){
  $yourAnswer=[$_POST['q1'],$_POST['q2'],$_POST['q3']];
  $answer=[$_POST['answer'],$_POST['answer2'],$_POST['answer3']];
  for($i=0;$i<3;$i++){
    if($yourAnswer[$i]==$answer[$i]){
      $var[$i]=true;
  }else{
    $var[$i]=false;
  }
  }
  if($var[$j]){
    echo '<p>正解！</p>';
  }else{
    echo '<p>残念・・・</p>';
  }
}    
  
?>
<link rel="stylesheet" href="style.css">
<p><!--POST通信で送られてきた名前を表示-->さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
correctAnswer(0);
?>
<p>②の答え</p>

<!--作成した関数を呼び出して結果を表示-->
<?php
correctAnswer(1);
?>
<p>③の答え</p>
<?php
correctAnswer(2);
?>
<!--作成した関数を呼び出して結果を表示-->