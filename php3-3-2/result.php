<?php

  //②フォームからのデータを受け取ります
  $name = $_GET['name'];
  $num = $_GET['num'];
  $today=date("Y/m/d", time());

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $result = mt_rand(1,6)* $num ;

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  if ( $result<=10)
  {
      $fortune="凶";
  }
  elseif ($result<=15)
  {
      $fortune="小吉";
  }
  elseif ($result<=20)
  {
      $fortune="中吉";
  }
  elseif ($result<=25)
  {
      $fortune="吉";
  }
  elseif ($result<=36)
  {
      $fortune="大吉";
  }
  else ($result<=36)
  {
      $fortune="残念";
  }
  
  print $today;
  echo "<br>";
  echo ("名前は$neme です。") ;
  echo "<br>";
  echo ("番号は$result です。");
  echo "<br>" ;
  echo ("結果は$fortune です。");
  ?>

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
 

 

 

 