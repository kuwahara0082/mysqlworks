<?php
/*データベースと接続するための記述開始*/
$con = mysql_connect('localhost', 'DBユーザ名', 'DBパスワード');
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
$path = './Smarty/';
require_once $path . 'Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = $path . 'templates';
$smarty->compile_dir = $path . 'templates_c';
# デフォルトの修飾子にescapeを指定します。
$smarty->default_modifiers = array('escape');
$smarty->assign('title', '簡単なつぶやきアプリ');

//コメントの送信があればデータベースに登録する
if(count($_POST) > 0) {
    $name = mysql_real_escape_string($_POST['name']);
    $comment = mysql_real_escape_string($_POST['comment']);

    $sql = "SELECT * FROM test WHERE name = '" . $name . "' AND comment = '" . $comment . "'";
    $tmp = mysql_query($sql, $con);
    $check = mysql_fetch_array($tmp);

	if($_POST['mode'] == 'insert' && $check == ""){	//データがなければ登録
    	$sql = "INSERT INTO test(name, comment, comment_date) VALUES ('$name', '$comment', now())";
	    mysql_query($sql, $con);
    } elseif($_POST['mode'] == "delete") {	//つぶやきの削除

	    $sql = "DELETE FROM test WHERE id = " . $_POST['id'];
	    $tmp = mysql_query($sql, $con);
    }
}

//データベースよりコメントテーブルのデータを取得
$sql = "SELECT * FROM test";
$tmp = mysql_query($sql, $con);
//全件取得する
while($result = mysql_fetch_assoc($tmp)) {
    $arrayComment[] = $result;
}

$smarty->assign('arrayComment', $arrayComment);
//画面描画
$smarty->display('easy_comment.tpl');

/*コメント処理用の記述終了*/


/*データベースと接続するための記述開始*/
$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}
/*データベースと接続するための記述修了*/
?>
