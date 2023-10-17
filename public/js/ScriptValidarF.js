

function validarCorreoL() {
    var correo = document.getElementById("username").value;
    if (correo.endsWith("@unicolombo.edu.co")) {
        return true;
    } else {
        alert("El correo debe ser el institucional");
        return false;
       
    }
}
function validarCorreo() {
    var correo = document.getElementById("email").value;
    if (correo.endsWith("@unicolombo.edu.co")) {
        return true;
    } else {
        alert("El correo debe ser el institucional");
        return false;
       
    }
}



function verificarClave() {
    var contraseña1 = document.getElementById("password").value;
    var contraseña2 = document.getElementById("password_confirmation").value;

    if (contraseña1 === contraseña2) {
        return true; 
    } else {
        alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
        return false; 
    }
}

