
function añadirCarrito(producto){ 
    if(comprobarCookie("producto")){

        var valorCookie = obtenerCookie("producto");
        var valorModificado = valorCookie+","+producto.name;
        document.cookie = "producto=" + valorModificado;
        //alert("existo");
    }else{
        document.cookie = "producto=" + producto.name;
    }
}

function comprobarCookie(clave) {
    var clave = obtenerCookie(clave);
    if (clave != "") {
        return true;
    } else {
        return false;
    }
}

function obtenerCookie(clave) {
    var name = clave + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}