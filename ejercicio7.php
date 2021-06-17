<?php 
$numero1=10;
$numero2=6;

//imprimo suma
echo $numero1+$numero2;
echo "<br>";
//si fuera resta
echo $numero1-$numero2;
echo "<br>";
//multiplicacion
echo $numero1*$numero2;
echo "<br>";
//division
echo $numero1/$numero2;
echo "<br>";

?>
<?php 
 $num1=5;
 $num2=10;
if($num1>$num2){
 for ($i=$num2; $i <= $num1 ; $i++) { 
     echo " la variable ".$i;
 }
}else{
    for ($i=$num1; $i <= $num2 ; $i++) { 
        echo " la variable ".$i;
    }
}

?>
<?php
$i = 1;     
$n = 100;   
$impar = 1; 
while ( $i <= $n){
	echo "$impar <br />";
	$i = $i + 1;
	$impar = $impar + 2;
}
?>
