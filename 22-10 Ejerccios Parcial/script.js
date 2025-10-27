function cargarBotones() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "botones.html", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("menu").innerHTML = ajax.responseText;
        }
    };
    ajax.send();

}
function cargarPregunta(url)
{
    fetch(`${url}`)
    .then(response => response.text())
    .then(data => {
                document.getElementById("principal").innerHTML = data;
    })
    
}
function modal(id ) {
    var imagen = document.getElementById(id).src;
    document.getElementById("imagen-modal").src = imagen;
    document.getElementById("modal").style.display = "block";
}
function cerrarModal() {
    document.getElementById("modal").style.display = "none";
}
cargarBotones();
