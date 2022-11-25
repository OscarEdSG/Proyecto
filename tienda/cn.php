<?php
//Creamos una variable con los siguientes parametros
//Servidor, usuario, contraseña, nombre_baseDeDatos
// $conexion = mysqli_connect("sql311.epizy.com", "epiz_32839070","BxKLOieLcE", "epiz_32839070_bikers"); //Hosting
$conexion = mysqli_connect("localhost", "root","", "bikers-mx"); //Usuario local 
/*if(!$conexion){ //Si no hay conexión
    echo 'Error en la conexión a la base de datos';
}
else{
    echo 'Conexión exitosa';
}*/