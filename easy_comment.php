<?php
/*データベースと接続するための記述開始*/
$con = mysql_connect('localhost', 'test01', 'testk');
if (!$con) {
  exit('データベースに接続できませんでした。');
}

$result = mysql_select_db('test', $con);
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysql_query('SET NAMES utf8', $con);
if (!$result) {
  exit('文字コードを指定できませんでした。');
}
/*データベースと接続するための記述終了*/


/*コメント処理用の記述開始*/
$path = './smarty/';
require_once $path . 'Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = $path . 'templates';
$smarty->compile_dir = $path . 'templates_c';
# デフォルトの修飾子にescapeを指定します。
$smarty->default_modifiers = array('escape');

//コメントの送信があればデータベースに登録する

//データベースよりコメントテーブルのデータを取得
$result = mysql_query('SELECT * FROM test', $con);

if(count($_POST) > 0) {
    $name = mysql_real_escape_string($_POST['name']);
    $comment = mysql_real_escape_string($_POST['comment']);

	$sql = "INSERT INTO test(name, comment, comment_date) VALUES ('$name', '$comment', now())";
	mysql_query($sql, $con);
}
$smarty->display('easy_comment.tpl');
/*コメント処理用の記述終了*/


/*データベースと接続するための記述開始*/
$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}
/*データベースと接続するための記述修了*/
?>