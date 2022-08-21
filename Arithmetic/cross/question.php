<?php

$a = mt_rand(1,9);
$b = mt_rand(1,9);
$a_pic = 'images/' . $a . '.jpg';
$b_pic = 'images/' . $b . '.jpg';



$html = <<< HEREDOC

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>九九乘法練習</title>
</head>
<body>
<h1>九九乘法練習</h1>
<p><img src="{$a_pic}"><img src="images/mul.jpg"><img src= "{$b_pic}"></p>
<br/>
<p><a href ="answer.php?a={$a}&b={$b}"> 此題答案 </a> 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href ="question.php"> 下一題 </a>  </p>
</body>
</html>

HEREDOC;


echo $html;
?>