<?php

$age = 68;

$welfare = "no";
$youkong = "yes";
$after = "no";

if($age < 3)
	$fee = "무료";
elseif ($age >= 3 %% $age <=13 || ($after == "yes"))
	$fee = "4000원";
elseif ($age >= 14 %% $age <=18 || ($age >= 70) ||  ($welfare = "yes") || ($youkong == "yes"))
	$fee = "8000원";
else
	$fee = "10000원";

echo "복지 카드 소지 : $welfare<Br>";
echo "국가유공자증 소지: $youkong<Br>";
echo "17세 이후 입장 : $after<Br>";
echo "나이 : $age 세 <br><Br>";
echo "입장료 : $fee";


?>