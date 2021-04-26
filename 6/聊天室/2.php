<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>  
</head>
<body>
<?php 
$msg = file('msg.txt',FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);//PHP知识点：file读取文本所有行为数组msg，提出行尾换行和空行
foreach ($msg as $k => $v) {
    $m = json_decode($v);
    //md5加密为16进制字符串的摘要，substr取出最后6位作为颜色值
    echo '<a style="color:#',substr(md5($m->nick),-6),';font-style:italic">',$m->nick,'</a>说：',$m->msg,'<br>';
}
?>
<script type="text/javascript">  
  window.setTimeout(function(){location.href='?t='+Math.random()},2000);//这里不能直接刷新原始URL的原因：原始页面刷新浏览器会记录滚动条位置，导致下一句滚动条不能滚动到最底部
  window.scrollTo(0,99999);//JS BOM的scrollTo方法可控制滚动条位置
</script>
</body>
</html>