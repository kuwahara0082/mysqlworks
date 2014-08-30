<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="js/common.js"></script>
<title>{$title}</title>
</head>
<body>
    <form name="form1" method="POST" action="#">
        名前：<input type="text" name="name"><br>
        コメント：<br>
        <textarea name="comment" cols=40 rows=6></textarea><br>
        <input type="button" value="コメントする" onclick="fnSubmit()">
    </form>
</body>
</html>