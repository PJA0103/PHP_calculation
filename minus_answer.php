<?php

$big = isset($_GET['a'])? $_GET['a'] : 0 ; 
$small = isset($_GET['b'])? $_GET['b'] : 0 ;
$result = $big - $small;

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
    <p>{$result}</p>
    <p><a href="minus_question.php">再來一題</a></p>
</body>
</html>
HEREDOC;

echo $html;
?>