<?php

for($i = 0; $i < 8; $i++)
{
	$a[$i] = $i + 2;
	echo $a[$i]." ";

}
echo "<br>";

for($j =0; $j <9; $j++)
{
	$b[$j] = $j + 1;
	echo $b[$j]." ";
}

echo "<br>---------------<br>";

for($i = 0; $i < 9; $i++)
{
	$c = $a[0] * $b[$i];
	echo "$a[0] x $b[$i] = $c<Br>";
}

echo "<br>---------------<br>";

for($i = 0; $i <9; $i++)
{
	$c = $a[4] * $b[$i];
	echo "$a[4] x $b[$i] = $c<Br>";
}

echo "<br>---------------<br>";

?>