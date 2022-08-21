<?php


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
    <p><h1>請選擇欲產出的名字</h1></p>
    <form action="output.php" method="POST">
    
        <p>請選擇姓氏：
            <input type="radio" name="familyname" value="both" checked>皆可
            <input type="radio" name="familyname" value="single">單姓
            <input type="radio" name="familyname" value="muti">複姓
        </p>
    
        <p>請選擇性別：
            <input type="radio" name="given_name" value="not_fixed" checked>都可
            <input type="radio" name="given_name" value="male">男
            <input type="radio" name="given_name" value="female">女
        </p>
            <input type="submit" value="產生姓名"> 

    </form>
</body>
</html>

HEREDOC;

echo $html;
?>
