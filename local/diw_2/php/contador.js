
function añadirCarrito(producto){ 
    document.cookie = "producto=" + producto.name;
}

function comprobarCookie(clave) {
    var clave = obtenerCookie(clave);
    if (clave != "") {
        alert("existe");
    } else {
        alert("mo existe");
    }
}