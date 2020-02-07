function todosSoportes(numero){
  $.ajax({
    url: 'historial_controller/buscarTodosSoportes/' + numero,
    dataType: 'json',
    type: 'get',
    success: function(todosSoportes){
      var p = "Pendiente"
      var tabla = '<tbody id="historial">'
      var ids = []
      for (var i = 0; i < todosSoportes.length; i++) {
        if (todosSoportes[i].estatus == p) {
          clase = "class=soporte-pendiente"
        }else {
          clase = ""
        }
        ids[0] = todosSoportes[i].id_solicitud
        ids[1] = todosSoportes[i].id_equipo
        ids[2] = todosSoportes[i].id_historial
        console.log(ids);
        tabla = tabla + '<tr' + ' ' + clase + ' ' + 'onclick="buscarDetalles('
        + ids[0] + ',' + ids[1] + ',' + ids[2] + ')"' + '>'
                      +  '<td>' + todosSoportes[i].folio + '</td>'
                      +  '<td>' + todosSoportes[i].tipo + '</td>'
                      +  '<td>' + todosSoportes[i].nombre + ' '
                              + todosSoportes[i].apellido_paterno + '</td>'
                      +  '<td>' + todosSoportes[i].cubiculo + '</td>'
                      +  '<td>' + todosSoportes[i].nombre_integrante + '</td>'
                      +  '<td>' + todosSoportes[i].fecha_inicio + '</td>'
                      +  '<td>' + todosSoportes[i].fecha_fin + '</td>'
                      +  '<td>' + todosSoportes[i].estatus + '</td>'
                      + '</tr>'
      }
      tabla = tabla + '<tbody>'
      $('#historial').replaceWith(tabla);
    }
  });

}

function detallesSoporte(){
  $.ajax({
  //  url: 'historial_controller/buscarDetalles',
    function() {
        alert('cambiando')
        location.href ="./info_soporte";
      }
  });
//  alert('buscando')
  location.href ="./informacion_soportes";
}

function buscarDetalles(idSolicitud, idEquipo, idHistorial){
  //console.log(idHistorial);
  $.ajax({
    url: 'info_soportes_controller/Detalles/' + idSolicitud + '/' + idEquipo + '/' + idHistorial,
    dataType: 'json',
    type: 'get',
    success: function(informacion){
      console.log(informacion);
        $('#TipoEquipo').val( pasarMayuscula(informacion[0].tipo) )
        $('#Marca').val((informacion[0].marca).toUpperCase())
        $('#Modelo').val((info[0].modelo))
        $('#NoSerie').val(info[0].no_serie)
        $('#NoInventario').val(info[0].no_inventario)
        $('#MAC').val( pasarMayuscula(info[0].mac_address))

    }
  });
  detallesSoporte();
}
