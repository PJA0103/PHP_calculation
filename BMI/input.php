<?php

$h = isset($_GET['h'])?$_GET['h']: '';
$w = isset($_GET['w'])?$_GET['w']: '';

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
    <h1>
        身體質量指數(BMI)計算
    </h1>
    <form method="post" action="calc.php">
        <p>身高(公分)<input type="text" name="height" size="4" value={$h}></p>
        <p>體重(公斤)<input type="text" name="weight" size="4" value={$w}></p>
        <P><input type="submit" value="送出計算"></P>

    </form>
    
</body>
</html>   

HEREDOC;

echo $html;
?>