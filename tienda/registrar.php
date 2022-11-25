<?php 
include 'cn.php';

//Recibir y almacenar datos en variables
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$numero = $_POST["numero"];
$comentario = $_POST["comentario"];


//Consulta para insertar datos del formulario a la base de datos
$insertar = "INSERT INTO usuario(nombre, apellidos, correo, usuario, clave, numero, comentario) 
VALUE ('$nombre','$apellidos','$correo','$usuario','$clave','$numero','$comentario')";


//Verificar usuario y correo
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario'");
if(mysqli_num_rows($verificar_usuario) > 0){
    //echo 'El usuario ya existe.';
    echo '<script languaje="javascript">alert("El usuario ya existe");
    window.history.go(-1);
    </script>';
    exit;
}
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '<script languaje="javascript">alert("El correo ya existe");
    window.history.go(-1);
    </script>';
    exit;
}


//Verificar que no haya campos vacios
if(isset($_POST['boton'])){ //isset solo funciona con nombre, con id no
    if(empty($nombre)){
        // echo"<p class = 'error'>El nombre es obligatorio</p>";
        echo '<script languaje="javascript">
        alert("El usuario no se registró");
        window.history.go(-1);
        </script>';
        exit;

    }
}
//Validar los demas campos


//Validación de longitud de los campos
if(isset($_POST['boton'])){
    if(strlen($nombre)>100){
        echo '<script languaje="javascript">
        alert("El usuario no se registró");
        window.history.go(-1);
        </script>';
        exit;
    }
    else if(strlen($apellidos)>100){
        echo '<script languaje="javascript">
        alert("El usuario no se registró");
        window.history.go(-1);
        </script>';
        exit;
    }
    else if(strlen($correo)>100){
        echo '<script languaje="javascript">
        alert("El usuario no se registró");
        window.history.go(-1);
        </script>';
        exit;
    }
    else if(strlen($usuario)>20){
        echo '<script languaje="javascript">
        alert("El usuario no se registró");
        window.history.go(-1);
        </script>';
        exit;
    }
    else if(strlen($clave)>10){
        echo '<script languaje="javascript">
        alert("El usuario no se registró");
        window.history.go(-1);
        </script>';
        exit;
    }
    else if(strlen($numero)>10){
        echo '<script languaje="javascript">
        alert("El usuario no se registró");
        window.history.go(-1);
        </script>';
        exit;
    }
}

//Ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if($resultado){
    //echo 'Usuario registrado correctamente';
    echo '<script languaje="javascript">alert("Usuario registrado correctamente");
    window.history.go(-1);
    </script>';
    exit;
}
else if(!$resultado){
    //echo 'Error al registrar usuario';
    echo '<script languaje="javascript">alert("Error al registrar usuario");
    window.history.go(-1);
    </script>';
    exit;
}


 //Cerrar conexión a la base de datos
 mysqli_close($conexion);
?>