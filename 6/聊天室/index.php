<?php 
//如果用户提交来消息，把消息追加到文本文件
if($_POST['msg']){//PHP知识点：if流程控制语句，$_POST超全局变量
    $f = fopen('msg.txt', 'a');//PHP知识点：文件追加打开
    fwrite($f, json_encode($_POST).PHP_EOL);//PHP知识点：json_encode将对象转换为JSON字符串，PHP_EOL换行预定义常量
    fclose($f);
}
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>聊天室</title>
</head>
<body>
 <iframe id="msgfrm" src="2.php" style="width:100%;height:calc(100vh - 80px)"></iframe><!--HTML知识点：iframe-->
 <form id="form1" method="post" action="?" style="width:100%;position: fixed;bottom: 0px"><!--CSS知识点：position: fixed-->
    <input type="hidden" name="nick" id="nick" value="<?=$_POST['nick']?>">
    <div>
        <label>消息</label>
        <input  type="text" name="msg" id="msg" size="100" autofocus required autocomplete="off"><!--HTML5知识点：required、autocomplete、autofocus-->
    </div>
 </form>
 <script>
 if(!<?=strlen($_POST['nick'])?>){//PHP知识点：php执行逻辑；php指令标记＜?=即为＜?echo ....；strlen函数；$_POST超全局变量
     var nick = window.prompt('提示','输入昵称');//JS BOM(Browser Object Model)知识点：window提示框：alert、confirm、prompt    
     form1.nick.value = nick;//JS DOM(Document Object Model)知识点：可使用通用方法代替window.document.getElementById('nick').value
 }
 msg.focus();//JS DOM元素的focus方法可设置页面输入焦点
 </script> 
</body>
</html>