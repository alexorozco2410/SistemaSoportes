
function obtenerMisSoportes(){
  $.ajax({
    url: 'mis_soportes_controller/buscarSoportes',
    dataType: 'json',
    type: 'get',
    success: function(misSoportes){
      //$('#listaEquipos').val(info[0].nombre)
      var p = "Pendiente"
      for (var i = 0; i < misSoportes.length; i++) {
        numero = i+1
        if (misSoportes[i].estatus == p) {
          clase = "class=soporte-pendiente"
        }else {
          clase = ""
        }

        var filaTabla = '<tr' + ' ' + clase + '>'
                          + '<td>'+ numero +'</td>'
                          + '<td>'+ misSoportes[i].tipo + '</td>'
                          + '<td>'+ misSoportes[i].no_inventario + '</td>'
                          + '<td>'+ misSoportes[i].estatus + '</td>'
                          + '<td>'+ misSoportes[i].fecha_solicitud+ '</td>'
                          + '<td>'+ misSoportes[i].hora_solicitud +'</td>'
                          + '<td class="descprob">'+ misSoportes[i].problema +'</td>'
                      + '</tr>'
        $('#misSoportes').append(filaTabla);
      }
    //  console.log(misSoportes)
    //  console.log(equipos.length)
    }
  });
}
