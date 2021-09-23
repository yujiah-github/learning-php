<?php
$a = setcookie("userid", "rubato");
$b = setcookie("username", "유지아", time()+60);

if($a and $b)
{
	echo "쿠키 'userid' 와 'username'은 생성 완료! <Br>";
	echo "쿠키 'username'은 60초 간 지속됨.";
}	
?>