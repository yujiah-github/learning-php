<?php

//배열을 이용하여 합계, 평균 구하기. 배열 원소는 0부터 시작한다.

$score[0] = 90;
$score[1] = 85;
$score[2] = 80;
$score[3] = 75;
$score[4] = 70;

$sum = 0;
for($a = 0; $a <= 4; $ ++)
{
	$sum = $sum + $score[$a];

}

$avg = $sum / 5;

echo "과목 점수 : $score[0], $score[1], $score[2], $score[3], $score[4]<Br>";
echo "합계 : $sum , 평균 : $avg <br>";


?>