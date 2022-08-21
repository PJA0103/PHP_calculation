<?php

$familyname = isset($_POST['familyname'])? ($_POST['familyname']):'';
$given_name = isset($_POST['given_name'])? ($_POST['given_name']):'';

$familyname_single = array("吳","王","黃","李","林","洪","楊","劉","施","張","趙","陳","鄧","謝",
"何","許","宋","朱","徐","高","馬","羅","韓","葉","唐","錢","潘","曹","方","崔","程","袁","盧","杜",
"彭","陸","毛","白","文","關","苗","遲","闕","廖","蔣","沈","尤","畢","皮","孟","任","席","房","賴",
"卓","冉","柴","向","古","易","耿","曾","陳","丁","鄒");

$familyname_muti = array("歐陽","范姜","端木","上官","司馬","夏侯","諸葛","東方","西門","第五",
"司徒","獨孤","公羊","軒轅","令狐","太史","尉遲","長孫","司空","張簡","葉赫","愛新覺羅");

if ($familyname == 'single' ){
    $familyname_box = $familyname_single;
}
elseif ($familyname == 'muti' ){
    $familyname_box = $familyname_muti;
}
else{
    $familyname_box = $familyname_single + $familyname_muti;
}

$family_count = count($familyname_box);
$family_num = mt_rand (0, ($family_count-1));

$final_familyname = $familyname_box [$family_num] ;

$given_name_male = array("洋","凱","克","正","直","荀","裕","昱","彧","肇","晁","良","銘","學",
"諒","喬","誼","愷","山","霖","麟","靖","齊","揚","勤","川","伯","柏","博","百","國","輝","伸",
"港","經","中","保","易","義","頤","傑","頡","閔","民","瑞","睿","峰","鋒","豐","甫","府","福","雍",
"騰","宏","弘","廷","勁","立","竣","俊","峻","欽","宸");

$given_name_female = array("純","依","漪","亭","婷","月","雪","翎","伶","慧","怡","宜","儀","熙","蘭",
"裴","靜","靚","吟","盈","瑩","瀅","琪","雅","萱","瑄","淑","斯","思","婕","妤","敏","雯","珊","姍","晶",
"菁","晴","琄","娟","芙","香","薌","馨","芯","莘","櫻","瑛","茵","宓","珍","蓁","芊","渼","美","凌",
"玲","鈴","秀","姵","佩","霈","珮","萍","莎","蓉","嫻","妍");

$given_name_not_fixed = array("惠","風","楓","培","亞","偉","瑋","維","唯","千","仙","詩","謙","琦",
"祈","雨","羽","宇","呈","安","晏","硯","日","軒","光","寶","佳","嘉","捷","叡","斐","欣","梓","翠",
"昕","景","之","海","涵","乙","倚","津","穆","慕","辰","真","禎","文","恩");

if ($given_name == 'male'){
    $given_name_box = $given_name_male + $given_name_not_fixed ;
}
elseif ($given_name == 'female'){
    $given_name_box = $given_name_female + $given_name_not_fixed ;
}else{
    $given_name_box = $given_name_male + $given_name_female + $given_name_not_fixed ;
}

$given_name_count = count($given_name_box);
$given_name_num1 = mt_rand (0, ($given_name_count - 1));
$given_name_num2 = mt_rand (0, ($given_name_count - 1));

$final_given_name1 = $given_name_box[$given_name_num1];
$final_given_name2 = $given_name_box[$given_name_num2];


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
    <form action= "input.php">
    <p><h1>選定的名字為</h1></p>
        <p><h2>{$final_familyname} &nbsp {$final_given_name1}{$final_given_name2}</h2></p>
        <p><input type = "submit" value= "再選一次"> </p>
    </form>
</body>
</html>
HEREDOC;

echo $html;
?>