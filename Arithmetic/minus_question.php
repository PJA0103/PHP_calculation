<?php

$small = mt_rand(0,99);
$big = mt_rand(0,99);

if( $small >= $big ){
    $a = $small;
    $b = $big;
}
else{
    $a = $big;
    $b = $small;
}

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
    <p>{$a}-{$b}</p>
    <p><a href="minus_question.php">再來一題</a></p>  
    <p><a href="minus_answer.php?a={$a}&b={$b}">這題答案</a></p>
</body>
</html>
HEREDOC;

echo $html;
?>