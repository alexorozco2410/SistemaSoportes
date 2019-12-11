function login(){
  let datos = $('#login').serialize();//se toman los datos del formulario con id "login"

  $.ajax({
    url: 'login_controller/logUsuario',
    dataType: 'json',
    type: 'post',
    data: datos,
    success: function(data) {
      if(data.status==0){
        alert(data.error)
      }else {
        alert('Bienvenido al sistema')
        location.href ="./solicitud";
      }
    }
  });
}

function buscarEquipos(){
  $.ajax({
    url: 'login_controller/obtenerEquipos',
    dataType: 'json',
    type: 'get',
    success: function(equipos){
      //$('#listaEquipos').val(info[0].nombre)
      for (var i = 0; i < equipos.length; i++) {
        var botonEquipo = '<button type="button" class="btn list-group-item btn-equipo" onclick="llenarFormulario('
        + equipos[i].id_equipo + ')">' + (equipos[i].equipo).toUpperCase() + '</button>'
        $('#listaEquipos').append(botonEquipo);
      }
    //  console.log(equipos)
    //  console.log(equipos.length)
    departamentos();
    }
  });
}

var deptos = ["Construccion", "Geotecnia", "Hidraulica", "Sistemas",
"Sanitaria", "C. Proyectos", "C. Ing. Civil", "C. Ing. Geomatica",
"C. Administrativa", "Jefatura", "Topografia", "Geodesia y Catografia",
"Estructuras"]
deptos.sort()

function departamentos(){
  for (var i = 0; i < deptos.length; i++) {
    var value = deptos[i].toLowerCase()
    var opcion_dept = '<option value="' + value + '">'
    + deptos[i] + '</option>'
    $('#Departamento').append(opcion_dept);
  }

}
