<?php
$name=$_GET['my_name'];//POST送信で送られてきた名前を受け取って変数を作成

//①画像を参考に問題文の選択肢の配列を作成してください。

//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>
<p>お疲れ様です"$name"さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->