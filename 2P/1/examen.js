function cargarContenido(url) {
    var contenido = document.getElementById("contenido");
    var ajax = new XMLHttpRequest();
    ajax.open("GET", url, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) {
              contenido.innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}
function cargarContenido2(url){
    var modal=document.getElementById("modal-registro");
    fetch(url).then(response=>response.text())
    .then(data => {
        modal.innerHTML = data;
        document.getElementById("modal-registro").style.display = "block";
        fetch("tiposreceta.php").then(response=>response.text())
        .then(data =>{
            document.getElementById('idtiporeceta').innerHTML=data;
        } 

        )



    });
}
function mostrarDetalles(id) {
    var detalles = document.getElementById(id);
    console.log(detalles.dataset.titulo);
    document.getElementById("modal-titulo").innerText =detalles.dataset.titulo;
    document.getElementById("modal-tiporeceta").innerText =detalles.dataset.tiporeceta;
    document.getElementById("modal-imagen").src =detalles.src
    document.getElementById("modal-preparacion").innerText =detalles.dataset.preparacion;
     document.getElementById("modal").style.display = "block";

}
function cerrarModal() {
    document.getElementById("modal").style.display = "none";
}

function anadirColor()
{
    color=document.getElementById('color').value;
    grilla=document.getElementById('grilla');
    var elemento=document.createElement('div')
    elemento.innerHTML = "&nbsp;";
    elemento.style.backgroundColor=color;
    grilla.appendChild(elemento);

}