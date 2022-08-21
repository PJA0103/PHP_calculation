<?php

$a = mt_rand(1,10) ;
$b = mt_rand(1,10) ;
$solution = $a * $b ; 


$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>{$solution} / {$a}</p>
    <p><a href="division_question.php">再來一題</a></p>
    <p><a href="division_answer.php?a={$b}">這題答案</a></p>
</body>
</html>
HEREDOC;


echo $html;
?>