<?php
// c1 branch gihub
$x = 3; // Pradinis NR.
$t = 1; 
$d = 2;
$g = 1;
$h = 3;
class fun {
	public $e;
	public $d;
	public $g;
	public $h;
	public $rez;
	
  function set_e($x) {
    $this->e = $x;
  }
  
function __construct($d, $g, $h) {
        $this->d = $d;
        $this->g = $g;
        $this->h = $h;
    }
  
   function get_rez() {
    return  $this->rez;
  }
 function ska1() {
     $this->rez = $this->e / $this->d;
	 return  $this->rez;
   }
   function ska2() {
     $this->rez = $this->h * $this->e + $this->g;
	 return  $this->rez;
   }
}

$obj=new fun($d, $g, $h);
echo "Start nr: $x <br>";
echo "#############<br>";
while ($x != 1) 
{
    echo "Loop: $t <br>";
    echo "The number is: $x <br>";
    echo "---------------------------<br>";
	$obj -> set_e($x);
    if ($x % 2 == 0) 
	{
       // $x = $x / 2;  // Jei lyginis %2
	   $x = $obj -> ska1();
    } 
	else 
	{
       // $x = 3 * $x + 1; // Jei nelyginis 3x+1
	  $x = $obj -> ska2();
    }
    $t++; 
}
// Rodo paskutini
echo "Loop: $t <br>";
echo "The number is: 1 <br>";
echo "-----------end-----------<br>";

?>