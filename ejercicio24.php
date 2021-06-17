<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>Testing tipos de datos</div>
<?php 
 $miArray = array ('Elemento 1', 5 ,false);
 $varString = "Soy un String";
 $varNum = 5;
 $varbool= true;
     if(is_array($miArray)){
        echo "<h2>La variable miArray es un array</h2>";
 }else{
    echo "<h2>La variable miArray  NO es un array</h2>";
 }

 if(is_string($varString)){
    echo "<h2>La variable varString es un String</h2>";
}else{
   echo "<h2>La variable varString  NO es un String</h2>";
 }

 if(is_int($varNum)){
    echo "<h2>La variable varNum es un entero</h2>";
}else{
   echo "<h2>La variable varNum  NO es un entero</h2>";
 }
 if(is_bool($varbool)){
    echo "<h2>La variable varbool es un boleano</h2>";
}else{
   echo "<h2>La variable varbool  NO es un boleano</h2>";
 }
  

 


 ?>
    
</body>
</html>