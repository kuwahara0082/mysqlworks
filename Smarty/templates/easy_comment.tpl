<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="js/common.js"></script>
<link rel="stylesheet" href="css/common.css">
<title>{$title}</title>
</head>
<body>
    <h2>{$title}</h2>
    <form name="form1" method="POST" action="#">
        <input type="hidden" name="id" value="">
        <input type="hidden" name="mode" value="">
        名前　　：<input type="text" name="name" id="name"><br>
        コメント：<br>	
        　　　　　<textarea name="comment" id="comment" cols=40 rows=6></textarea><br>
        <input type="button" value="コメントする" onclick="fnSubmit()">
    </form><br>

    {foreach from=$arrayComment key=key item=value}
        <div class="name">{$value.name}
            <div class="comment_date">{$value.comment_date}</div>
        </div>
        <div class="comment">
           {$value.comment}
        </div>
        <div>
            <input type="button" class="delete" value="削除" onclick="fnDelete({$value.id})">
        </div><br>
    {foreachelse}
        コメントはありません。
    {/foreach}
</body>
</html>
