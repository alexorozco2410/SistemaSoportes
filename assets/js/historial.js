function todosSoportes(){
  $.ajax({
    url: 'historial_controller/buscarTodosSoportes',
    dataType: 'json',
    type: 'get',
    success: function(todosSoportes){

      var p = "Pendiente"
      for (var i = 0; i < todosSoportes.length; i++) {

        if (todosSoportes[i].estatus == p) {
          clase = "class=soporte-pendiente"
        }else {
          clase = ""
        }
        var filaTabla ='<tr' + ' ' + clase + '>'
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
        $('#historial').append(filaTabla);
      }
    }
  });

}
