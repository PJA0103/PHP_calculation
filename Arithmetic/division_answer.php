<?php

$b = isset($_GET['a'])? $_GET['a'] : 0;


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
    <p>這題答案是 {$b}</p>
    <p><a href="division_question.php">再來一題</a></p>
</body>
</html>
HEREDOC;

echo $html;
?>