<?php
//$x = 7; // Pradinis NR.
//$nr = [];
$nr = array(3, 4, 5);
$tm = [];
$t = 0; 
$m = [];
$max = 0;

	for($p = 0; $p < 20; $p++) // eina i cikla
	{
		$x = $nr;
		//$nr = $x;
		echo "Start nr: $ <br>";
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
	$m = $max;
	$tm = $t;
	
	}
//Rodo paskutini
//echo "Loop: $t <br>";
echo "The number is: 1 <br>";
echo "-----------end-----------<br>";
echo "max: $max <br>";
echo "Loops total: $t <br>";
echo "----------------------<br>";

for($p = 0; $p < 3; $p++)
{
	echo "Didziausias: $m ";
	echo "Maziausias: ";
	echo "Loop: $tm <br>";
}
echo "*****************";


?>