<?php 
$fruits = array (
    "frutas"  => array("a" => "naranja", "b" => "plátano", "c" => "manzana"),
    "números" => array(1, 2, 3, 4, 5, 6),
    "hoyos"   => array("primero", 5 => "segundo", "tercero")
);

echo "<br>";
print_r($fruits)    ;
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);

$numeros= array(9,8,7,6,5,4,3,2,1);
echo "<br>";
print_r($numeros);

sort($numeros);
var_export($numeros);
echo"los valores del array son ".$numeros;
echo "<br>";
print_r("EL tmanio del array  es de =".sizeof($numeros));

print_r("<br>");


for ($i=0; $i <count($numeros) ; $i++) { 
    # code...
    echo ("La posicion ".$i." contiene ". $numeros[$i].".\n");
    echo("\n");
}

 ?> 