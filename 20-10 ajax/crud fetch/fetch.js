function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}


function crear()
{
    var datos=new FormData(document.querySelector('#form-insertar'));
	contenedor = document.getElementById('contenido');
    fetch("create.php",
        {method:"POST",
		body:datos})
		.then(response => response.text())
		.then(data => {contenedor.innerHTML=data
            setTimeout(function(){
                cargarContenido('read.php');
            }, 5000);
        });


}

function formEditar(id) {
    var datos=new FormData(document.querySelector('#form-editar'));
	contenedor = document.getElementById('contenido');
    fetch(`formeditar.php?id=${id}`)
		.then(response => response.text())
		.then(data => {contenedor.innerHTML=data
            setTimeout(function(){
                cargarContenido('read.php');
            }, 5000);
        });
}

function editar()
{
    var datos=new FormData(document.querySelector('#form-editar'));
	contenedor = document.getElementById('contenido');
     fetch("edit.php",
        {method:"POST",
		body:datos})
        .then(response => response.text())
		.then(data => {contenedor.innerHTML=data
            setTimeout(function(){
                cargarContenido('read.php');
            }, 5000);
            });
}
function eliminar(id) { 
    if (confirm("Estas seguro que quieres eliminar")) {
        var datos=new FormData(document.querySelector('#form-editar'));
	contenedor = document.getElementById('contenido');
    fetch(`delete.php?id=${id}`)
		.then(response => response.text())
		.then(data => {contenedor.innerHTML=data
            setTimeout(function(){
                cargarContenido('read.php');
            }, 5000);
        });
    }
}
