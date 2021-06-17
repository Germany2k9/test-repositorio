<?php 
$videojuegos = array (
    "accion"  => array("GTA", "COD", "PUGB"),
    "aventura" => array("Assesins", "Crash", "Prince Of Persia"),
    "deportes"   => array("FIFA19", "PES19", "Moto GP19")
);
print_r($videojuegos);

if(array_key_exists("2D",$videojuegos)){
  echo "tenemos juegos en 2D";
}else{
    echo"necesitamos juegos en 2D";

}
echo "<br>";
if(array_key_exists("Aventura",$videojuegos)){
    echo "tenemos juegos en Aventura";
  }else{
      echo"necesitamos juegos en aventura";
  
  }
  echo "<br>";
  foreach($videojuegos as $key=>$valor){
    //   echo ("$key: $valor <br>");
    print_r($key)."<br>";
  }
  foreach($videojuegos as $key=>$valor){
    echo "<b> $key: </b> <br>";
    foreach($valor as $leche){
        echo $leche . "<br>";
    }
}
?>