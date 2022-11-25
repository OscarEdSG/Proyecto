<?php 
if (isset($_POST['boton'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $header = "From: pruebas@ejemplo.com" . "\r\n";
        $header.= "Reply-To: pruebas@ejemplo.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $correo = mail($correo,$asunto,$mensaje,$header);
        if($correo){
            echo "<h4>¡Correo enviado exitosamente!</h4>";
        }
        else{
            echo "<h4>El correo no se pudo enviar</h4>";
        }
    }
}
?>