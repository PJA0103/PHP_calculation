<?php

$height = isset($_POST['height'])?$_POST['height']:輸入無效;
$weight = isset($_POST['weight'])?$_POST['weight']:輸入無效;

if($height <= 0 ){
    echo '身高出錯 <a href= "input.php?w='.$weight.'">重新輸入</a>';
    die();
}
if($weight <= 0 ){
    echo '體重出錯 <a href= "input.php?h='.$height.'">重新輸入</a>';
    die();
}

$bmi = $weight / (($height/100)*($height/100)) ;
$bmi_int = round($bmi,2);

$print = '';
$pic = '';
if($bmi_int > 24 ){
    $print = '肥胖';
    $pic = 'images/s1.jpg';
    $url = 'page1.html';
}
elseif($bmi_int <= 24 && $bmi_int > 22 ){
    $print = '過重';
    $pic = 'images/s2.jpg';
    $url = 'page2.html';
}
elseif($bmi_int <= 22 && $bmi_int >17.5 ){
    $print = '正常';
    $pic = 'images/s3.jpg' ;
    $url = 'page3.html';
}
elseif($bmi_int <= 17.5 ){
    $print = '過瘦';
    $pic = 'images/s4.jpg';
    $url = 'page4.html';
}
else{$print = '出錯囉';}

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
    <h1>身體質量指數(BMI)計算</h1>
    <hr>
    <p>你的身高是 {$height}  &nbsp &nbsp  你的體重是 {$weight} </p>
    <form method="post" action="input.php">
    <p> <input type = submit value="重新計算"> </p>
    </form>
    <hr>
    <h2>你的BMI是 {$bmi_int}</h2>
    <p>體態為 {$print}</p>
    <p><img src="{$pic}"></p>
    <P><iframe src = "{$url}" width = "650" height = "400"></iframe></p>

</body>
</html>


HEREDOC;

echo $html;
?>