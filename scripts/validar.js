function validar(){

    var nombre, apellidos, correo, usuario, clave, numero;
    var ernomyape, ercorreo, erusuario, erclave;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("clave").value;
    numero = document.getElementById("numero").value;
    
    ercorreo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,3})$/;
    erusuario = /^[a-zA-Z0-9]{5,20}$/;
    ernomyape = /^([A-Z]{1}[a-zñáéíóú]+\s?)+$/;
    erclave = /^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[$@$!%?&])[A-Za-z\d$@$!%?&]{5,10}/;

    //EJEMPLO DE VALIDACION CAMPO VACIOS.
    if(nombre==="" || apellidos==="" || correo==="" || usuario==="" || clave==="" || numero===""){
        alert("Los campos no pueden estar vacios.");
        return false;
    }

    //EJEMPLO DE VALIDACION DE LONGITUD.
    else if(nombre.length > 100){
        alert("El nombre es demasiado largo.");
        return false;
    }
    else if(apellidos.length > 100){
        alert("Los apellidos son demasiados largo.");
        return false;
    }
    else if(correo.length > 100){
        alert("El correo es demasiado largo.");
        return false;
    }
    else if(usuario.length > 20){
        alert("El usuario es demasiado largo.");
        return false;
    }
    else if(clave.length > 10){
        alert("La contraseña es demasiada larga.");
        return false;
    }
    else if(numero.length > 10){
        alert("El telefono es demasiado largo.");
        return false;
    }

    //VALIDACION DE QUE SOLO SEAN NUMEROS
    else if(isNaN(numero)){
        alert("El telefono solo admite numeros.");
        return false;
    }

    //VALIDACION POR REGEX
    if(!ercorreo.test(correo)){
        alert("El formato de correo no es el correcto.");
        return false;
    }
    else if(!ernomyape.test(nombre)){
        alert("El formato del nombre no es el correcto.");
        return false;
    }
    else if(!ernomyape.test(apellidos)){
        alert("El formato del apellido no es el correcto.");
        return false;
    }
    else if(!erusuario.test(usuario)){
        alert("El formato del usuario no es el correcto.");
        return false;
    }
    else if(!erclave.test(clave)){
        alert("El formato de la clave no es el correcto.");
        return false;
    }
}