<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="js/common.js"></script>
<link rel="stylesheet" href="css/common.css">
<!-- Bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<title>{$title}</title>
</head>
<body>
<div class="wrap_comment">
    <nav class="navbar navbar-default">
    <h2>{$title}</h2>
    </nav>
    <form name="form1" method="POST" action="#">
        <input type="hidden" name="id" value="">
        <input type="hidden" name="mode" value="">
        名前　　：<br>
                  <input type="text" class="form-control" name="name" id="name"><br>
        コメント：<br>	
        　　　　　<textarea name="comment" class="form-control" id="comment"></textarea><br>
        <button type="button" class="btn btn-info"onclick="fnSubmit()">
            <span class="glyphicon glyphicon-send"> コメントする</span>
        </button>
    </form><br>
</div>
<div class="wrap_disp">
    {foreach from=$arrayComment key=key item=value}
        <div class="name_disp">{$value.name}
            <div class="comment_date">{$value.comment_date}</div>
        </div>
        <div class="comment_disp">
           {$value.comment}
        </div>
        <div>
            <button type="button" class="btn btn-danger" onclick="fnDelete({$value.id})">
                <span class="glyphicon glyphicon-trash"> 削除</span> 
            </button>
        </div><br>
    {foreachelse}
        コメントはありません。
    {/foreach}
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
