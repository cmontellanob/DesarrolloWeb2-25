function cargarDepartamentos() {
  var departamento = document.getElementById("departamentos");

  fetch("departamentos.php")
    .then((response) => response.text())
    .then((data) => {
      objeto = JSON.parse(data);

      for (i = 0; i < objeto.length; i++) {
        let opcion = document.createElement("option");
        opcion.value = objeto[i].id;
        opcion.innerHTML = objeto[i].departamento;
                document.getElementById("departamentos").appendChild(opcion);
      }
    });
}

function cargarProvincias() {
  var departamento = document.getElementById("departamentos").value;
  fetch("provincias.php?iddepartamento=" + departamento)
    .then((response) => response.text())
    .then((data) => {
      objeto = JSON.parse(data);

     
      html = `<option value="">Seleccionar </option>`;

      for (i = 0; i < objeto.length; i++) {
   
        html += `<option value="${objeto[i].id}">${objeto[i].provincia}</option>`;
      }
     
      document.getElementById("provincia").innerHTML = html;
    });

  //alert(departamento);
}

function cargarMunicipios() {
  var provincia = document.getElementById("provincia").value;
  fetch("municipios.php?idprovincia=" + provincia)
    .then((response) => response.text())
    .then((data) => {
      console.log(data);  
      objeto = JSON.parse(data);
      html = `<option value="">Seleccionar </option>`;

      for (i = 0; i < objeto.length; i++) {
        html += `<option value="${objeto[i].id}">${objeto[i].municipio}</option>`;
      }
     
      document.getElementById("municipio_nacimiento_id").innerHTML = html;
    });

  //alert(departamento);
}
