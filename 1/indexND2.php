<?php
$nr = array(3, 4, 5);
$tm = [];
$t = 0; 
$m = [];
$max = 0;
	foreach($nr as $x)
	{
		echo "Start nr: $x <br>";
		echo "#############<br>";
		while ($x != 1) {
		//echo "Loop: $t <br>";
		echo "The number is: $x <br>";
		echo "---------------------------<br>";
		if ($x % 2 == 0) 
		{
			$x = $x / 2;  // Jei lyginis %2
		} 
		else 
		{
			$x = 3 * $x + 1; // Jei nelyginis 3x+1
		}
		if($x > $max)
		{
			$max = $x;
		}
		$t++;
		
	}
		$m[] = $max;
		$tm[] = $t;
//Rodo paskutini
//echo "Loop: $t <br>";
echo "The number is: 1 <br>";
echo "max: $m <br>";
echo "Loops total: $tm <br>";
echo "/\/\/\/\/\/\/\/\/\/\/\/\<br>";
	
}

foreach($nr as $x)
{
	echo "Didziausias: $m ";
	echo "Maziausias: ";
	echo "Loop: $tm <br>";
}
echo "*****************";


?>