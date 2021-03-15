<?php

echo "私の今日のチャレンジ";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$r =rand(1,4);

if($r==1){
    echo "挨拶をしましょう。\t お相手の存在を認める優しさです。";
    echo "<br>";
    echo "<img src='img/01.png'>";
}elseif($r==2){
    echo "誰かのために祈りましょう。\t 心を寄せることは最大の優しさです。";
    echo "<br>";
    echo "<img src='img/02.png'>";
}elseif($r==3){
    echo "掃除をしましょう。\t 皆が良い気持ちで過ごせるようにしましょう。";
    echo "<br>";
    echo "<img src='img/03.png'>";
}elseif($r==4){
    echo "手伝いをしましょう。\t どんな小さなことでもお役に立てることがあるはずです。";
    echo "<br>";
    echo "<img src='img/04.png'>";
}




?>
