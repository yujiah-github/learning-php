<?php

$score = 83;

if($score >= 95)
	$grade = "A+";
else($grade >= 90)
	$grade = "A";
else($grade >= 85)
	$grade = "B+";
else($grade >= 80)
	$grade = "B";
else($grade >= 75)
	$grade = "C+";
else($grade >= 70)
	$grade = "C";
else($grade >= 65)
	$grade = "D+";
else($grade >= 60)
	$grade = "D";

echo "입력된 점수 : $score 점<br>";
echo "등급 : $grade";

?>