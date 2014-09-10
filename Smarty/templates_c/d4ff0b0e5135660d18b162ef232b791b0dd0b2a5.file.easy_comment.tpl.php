<?php /* Smarty version Smarty-3.1.19, created on 2014-08-30 08:33:50
         compiled from "./Smarty/templates/easy_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137312325954009534bfc041-42482559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4ff0b0e5135660d18b162ef232b791b0dd0b2a5' => 
    array (
      0 => './Smarty/templates/easy_comment.tpl',
      1 => 1409355227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137312325954009534bfc041-42482559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54009534c7cde5_35080905',
  'variables' => 
  array (
    'title' => 0,
    'arrayComment' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54009534c7cde5_35080905')) {function content_54009534c7cde5_35080905($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="js/common.js"></script>
<link rel="stylesheet" href="css/common.css">
<!-- Bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
</head>
<body>
<div class="wrap_comment">
    <nav class="navbar navbar-default">
    <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2>
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
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayComment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <div class="name_disp"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

            <div class="comment_date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['comment_date'], ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
        <div class="comment_disp">
           <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>

        </div>
        <div>
            <button type="button" class="btn btn-danger" onclick="fnDelete(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
)">
                <span class="glyphicon glyphicon-trash"> 削除</span> 
            </button>
        </div><br>
    <?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
        コメントはありません。
    <?php } ?>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php }} ?>
