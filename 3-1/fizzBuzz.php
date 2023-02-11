<?php
for($i=1;$i<=100;$i++){
  if($i%3==0&&$i%5==0){
    echo "FizzBuzz!!<br>\n";
  }else if($i%3==0||$i%5==0){
    echo ($i%3==0)? " Fizz!<br>\n":"Buzz!<br>\n";
  }else{
    echo $i."<br>\n";
  }

}








?>