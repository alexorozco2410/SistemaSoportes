function todosSoportes(numero){
  $.ajax({
    url: 'historial_controller/buscarTodosSoportes/' + numero,
    dataType: 'json',
    type: 'get',
    success: function(todosSoportes){
      var p = "Pendiente"
      var tabla = '<tbody id="historial">'
      for (var i = 0; i < todosSoportes.length; i++) {

        if (todosSoportes[i].estatus == p) {
          clase = "class=soporte-pendiente"
        }else {
          clase = ""
        }

        tabla = tabla + '<tr' + ' ' + clase + '>'
        + '<li>'
        +   '<a href="mis_soportes">'
                      +  '<td>' + todosSoportes[i].folio + '</td>'
                      +  '<td>' + todosSoportes[i].tipo + '</td>'
                      +  '<td>' + todosSoportes[i].nombre + ' '
                              + todosSoportes[i].apellido_paterno + '</td>'
                      +  '<td>' + todosSoportes[i].cubiculo + '</td>'
                      +  '<td>' + todosSoportes[i].nombre_integrante + '</td>'
                      +  '<td>' + todosSoportes[i].fecha_inicio + '</td>'
                      +  '<td>' + todosSoportes[i].fecha_fin + '</td>'
                      +  '<td>' + todosSoportes[i].estatus + '</td>'
                      + '</a>'
                      + '</li>'
                      + '</tr>'
      }
      tabla = tabla + '<tbody>'
      $('#historial').replaceWith(tabla);
    }
  });

}
