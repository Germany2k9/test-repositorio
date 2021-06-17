<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 echo 'Hola mundo XXXDDDXXDD' ;
 
  ?>  

  <?php
    $numero= array();
for ($i=0; $i < 15; $i++) { 
  # code...
  array_push($numero, "Elemento ". $i );
}
   print_r($numero);
  
   foreach($numero as $valor){
     echo($valor."<br>");
   }
  
  ?> 
  <?php $texto="";

    if(empty($texto)){
      $texto ="this is a test de texto";
      $textoMayuscula= strtoupper($texto);
      echo $textoMayuscula; 
    }else{
      echo $texto;
    }
  
  
  
  
  ?>
  
</body>
</html>
