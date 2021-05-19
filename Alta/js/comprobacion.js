function validarclave() {
    /* Nombre de las funciones */
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;

    if (

        /* Si La clave 1 es distinta que la clave 2 devuelve la alerta */

        pass1 != pass2

    ) {
        
        alert("Las contraseñas deben coincidir.");
        return false;

    } else {

        /* Si las claves coinciden se manda */

        return true;

    }

}

