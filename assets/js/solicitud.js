function llenarFormulario(num){
  $.ajax({
    url: 'solicitud_controller/informacionEquipo/' + num,
    dataType: 'json',
    type: 'get',
    success: function(info) {
      //console.log(info)
      vaciarDatos()
      $('#Nombre').val(info[0].nombre)
      $('#ApellidoPat').val(info[0].apellido_paterno.toUpperCase().charAt(0) +
      info[0].apellido_paterno.substring(1, info[0].apellido_paterno.length()))
      $('#ApellidoMat').val(info[0].apellido_materno)
      $("#Departamento option[value='"+ info[0].departamento +"']").attr("selected", true)
      $('#Cubiculo').val(info[0].cubiculo)
      $('#Tel').val(info[0].telefono)
      $('#Ext').val(info[0].ext)
      $("#TipoEquipo option[value='"+ info[1].tipo +"']").attr("selected", true)
      $('#Marca').val((info[1].marca).toUpperCase())
      $('#NumSerie').val(info[1].no_serie)
      $('#NumInventario').val(info[1].no_inventario)
      $('#MACAddress').val(info[1].mac_address)
      $('#Hora').val(obtenerHora())
      $('#picker').val(obtenerFecha())
    }
  });
}

function obtenerHora(){
  var hour = (new Date()).getHours();
  var minutes = (new Date()).getMinutes();
  minutes += 10
  if (minutes > 59) {
    minutes -= 60
    hour += 1
  }
  if (hour > 23) {
    hour -= 24
  }
  if (hour < 10) {
    hour = "0"+hour
  }
  if (minutes < 10){
    return hour + ":0" + minutes
  }else{
    return hour + ":" + minutes
  }
  //var hours = hour + ":" + minutes
  //console.log(hours)
}

function obtenerFecha(){
  var dia = (new Date()).getDate();
  if (dia < 10) {
    dia = "0"+dia
  }
  var mes = (new Date()).getMonth()+1;
  var año = (new Date()).getFullYear();
  return año + "-" + mes + "-" + dia
//var fecha= año + "-" + mes + "-" + dia
//  var fecha = dia + "-" + mes + "-" +año
  //console.log(fecha)
}

function vaciarDatos(){
  $('#Nombre').val("")
  $('#ApellidoPat').val("")
  $('#ApellidoMat').val("")
  $("#Departamento option[value]").attr("selected", false)
  $('#Cubiculo').val("")
  $('#Tel').val("")
  $('#Ext').val("")
  $("#TipoEquipo option[value]").attr("selected", false)
  $('#Marca').val("")
  $('#NumSerie').val("")
  $('#NumInventario').val("")
  $('#MACAddress').val("")
  $('#Hora').val("")
  $('#picker').val("")
  $('#HOST').val("")
}
