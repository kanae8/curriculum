<?php
#POST送信で送られてきた名前を受け取って変数を作成
$text=$_POST['name_text'];
#①画像を参考に問題文の選択肢の配列を作成してください。
$port=[80,22,20,21];
$cord=["PHP","Python","JAVA","HTML"];
$mysql=["join","select","insert","update"];
#② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer=["80","HTML","select"];
?>
 <link rel="stylesheet" href="style.css">
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $text;?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2><br>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
foreach($port as $port1){
  echo '<input type="radio" name="q1" value='.$port1.'>'.$port1;
}
?>
<br>
<h2>②Webページを作成するための言語は？</h2><br>
<?php 
foreach($cord as $cord1){
  echo '<input type="radio" name="q2" value='.$cord1.'>'.$cord1;
}
?>
<br>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<h2>③MySQLで情報を取得するためのコマンドは？</h2><br>
<?php 
foreach($mysql as $mysql1){
  echo '<input type="radio" name="q3" value='.$mysql1.'>'.$mysql1;
}
?>
<br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="answer" value="<?php echo $answer[0];?>">
<input type="hidden" name="answer2" value="<?php echo $answer[1];?>">
<input type="hidden" name="answer3" value="<?php echo $answer[2];?>">
<input type="submit" value="解答する">
</form>