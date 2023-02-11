<?php
$testFile="test.txt";
$contents="こんにちは";

if(is_writable($testFile)){
  #echo "writable!!";
  $fp=fopen($testFile,"w");
  fwrite($fp,$contents.'<br>'."\n");
  fclose($fp);
  echo "finish writing!!";

}else{
  echo "not writable!";
  exit;
}

if(is_writable($testFile)){
  #echo "writable!!";
  $fp=fopen($testFile,"a");
  fwrite($fp,"さようなら".'<br>'."\n");
  fclose($fp);
  echo "finish writing!!";

}else{
  echo "not writable!";
  exit;
}


$testFile2="test2.txt";
if(is_readable($testFile2)){
  $fp=fopen($testFile2,"r");
  while($line=fgets($fp)){
    echo $line.'<br>';
  }
  fclose($fp);
}else{
  echo "not readable";
  exit;
}




?>