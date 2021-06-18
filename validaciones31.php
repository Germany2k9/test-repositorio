<!-- 
    1.	Realizar un programa que reciba por get una dirección de correo y compruebe si es correcta. 
        a.	Realizar la validación en una función   
        b.	Se puede utilizar la función filter_var()
 -->
 <?php 
 function esCorreoValido($correo){
     $correcto= false;
     if(!empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL)){
         $correcto =true;

     }
        return $correcto;
    }


    if(isset($_GET['correo'])){
    $correo= $_GET['correo'];
    if(esCorreoValido($correo)){
        echo "la direccion de correo  $correo es valida";

    }else{
        echo "la direccion de correo  $correo NO es valida";

    }
}else{
    echo "No se aha recibido ningun correo.";


}
?>
