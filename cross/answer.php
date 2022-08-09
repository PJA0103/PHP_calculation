<?php

$c = isset($_GET['a'])? $_GET['a'] : 1;
$d = isset($_GET['b'])? $_GET['b'] : 1;
$ans = $c * $d ;

$unit = $ans % 10 ;
$tens = floor($ans/10) ;

$tens_pic = '<img src="images/' . $tens . '.jpg">';
$unit_pic = '<img src="images/' . $unit . '.jpg">';

if($tens==0){
    $tens_pic = ' '; 
}
else{
    $tens_pic = '<img src="images/' . $tens . '.jpg">';
}

$html = <<< HEREDOC

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>九九乘法CAI練習</title>
</head>
<body>
<h1>九九乘法練習</h1>
<p> {$tens_pic}{$unit_pic} </p>
<p> <a href = "question.php"> 再來一題 </a> </p>
</body>
</html>

HEREDOC;

echo $html;
?>