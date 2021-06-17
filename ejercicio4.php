<?php 
$a= 10;
$resultado;
for ($i=0; $i < 10; $i++) { 
    # code...
    $resultado=$i*$a;
    echo "el resultado " .$resultado."<br>";
}

?>
<br>
<div>Ejercicio 4</div>
<?php
    print( "\n   " );

    for ( $i = 1 ; $i <= 4 ; $i++ )
    {
        print(  pow( 2, $i ) );
        echo"<br>";
    }

 ?>
 
 <div>Numeros Pares</div>

 <?php
    for($n=2; $n<=100; $n= $n+2){

 

        echo $n."</br>";
    
    }
 
 
 ?>