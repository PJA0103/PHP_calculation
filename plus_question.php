<?php 

$a = mt_rand(10,99);
$b = mt_rand(10,99);


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
    <p>{$a}+{$b}</p>
    <p><a href = "plus_question.php">下一題</a></p><br>
    <p><a href = "plus_answer.php?a={$a}&b={$b}">計算結果</a></p>
</body>
</html>

HEREDOC;

echo $html;
?>