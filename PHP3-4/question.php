<?php
$name=$_POST['my_name'];//POST送信で送られてきた名前を受け取って変数を作成

//①画像を参考に問題文の選択肢の配列を作成してください。
$opt1=[80,22,20,21];
$opt2=['PHP','Python','JAVA','HTML'];
$opt3=['join','select','insert','update'];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$ans1=$opt1[0];
$ans2=$opt2[0];
$ans3=$opt3[0];
?>
<p>お疲れ様です<?php echo "$name" ; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->

<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
function MakeOption($opt1){ 
    return "<P><input type="radio" name="hyouka" value="good" />".$opt1."</p>" ;
}?>
<form action="answer.php" method="post">
<?php 
foreach ($opt1 as $value){
    echo MakeOption($value) ;
}?>
 
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<p>
<input type="submit" value="送信する">
</p>
</form>