function llenarFormulario(num){
  $.ajax({
    url: 'solicitud_controller/informacionEquipo/' + num,
    dataType: 'json',
    type: 'get',
    success: function(info) {
      //console.log(info)
      $('#Nombre').val(info[0].nombre)
      $('#ApellidoPat').val(info[0].apellido_paterno)
      $('#ApellidoMat').val(info[0].apellido_materno)
      $("#Departamento option[value='"+ info[0].departamento +"']").attr("selected", true)
      $('#Cubiculo').val(info[0].cubiculo)
      $('#Tel').val(info[0].telefono)
      $('#Ext').val(info[0].ext)
      $("#TipoEquipo option[value='"+ info[0].tipo +"']").attr("selected", true)
      $('#Marca').val(info[0].marca)
      $('#NumSerie').val(info[0].no_serie)
      $('#NumInventario').val(info[0].no_inventario)
      $('#MACAddress').val(info[0].mac_address)
      $('#Hora').val(obtenerHora())
      $('#picker').val(obtenerFecha())
    }
  });
}

function obtenerHora(){
  var hour = (new Date()).getHours();
  var minutes = (new Date()).getMinutes();
  return hour + ":" + minutes
    //console.log(hours)
}

function obtenerFecha(){
  var dia = (new Date()).getDate();
  var mes = (new Date()).getMonth()+1;
  var año = (new Date()).getFullYear();
  return año + "-" + mes + "-" + dia
  //console.log(fecha)
}
