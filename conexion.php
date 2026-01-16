<?php
$conexion=mysqli_connect("localhost", "root", "", "USUARIO.html");
if(!$conexion){
    echo "error al conectarse";
}else{
    echo "Conexion Exitosa a la base de datos";
}
?>