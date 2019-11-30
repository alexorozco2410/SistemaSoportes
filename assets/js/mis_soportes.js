function obtenerMisSoportes(){
  $.ajax({
    url: 'mis_soportes_controller/buscarSoportes',
    dataType: 'json',
    type: 'get',
    success: function(misSoportes){
      //$('#listaEquipos').val(info[0].nombre)
      for (var i = 0; i < misSoportes.length; i++) {
        numero = i+1
        var filaTabla = '<tr>'
                          + '<td>'+ numero +'</td>'
                          + '<td>'+ 'equipo' + '</td>'
                          + '<td>'+ '123456' + '</td>'
                          + '<td>'+ misSoportes[i].estatus + '</td>'
                          + '<td>'+ misSoportes[i].fecha_solicitud+ '</td>'
                          + '<td>'+ '11:30' +'</td>'
                          + '<td class="descprob">'+ misSoportes[i].problema +'</td>'
                      + '</tr>'
        $('#misSoportes').append(filaTabla);
      }
    //  console.log(misSoportes)
    //  console.log(equipos.length)

    }
  });
}
