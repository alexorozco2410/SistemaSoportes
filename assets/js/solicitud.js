function llenarFormulario(num){
  $.ajax({
    url: 'solicitud_controller/informacionEquipo/' + num,
    dataType: 'json',
    type: 'get',
    success: function(info) {
      //console.log(info)
      vaciarDatos()
      $('#Nombre').val( pasarMayuscula(info[0].nombre) )
      $('#ApellidoPat').val( pasarMayuscula(info[0].apellido_paterno) )
      $('#ApellidoMat').val( pasarMayuscula(info[0].apellido_materno) )
      $("#Departamento option[value='"+ info[0].departamento +"']").attr("selected", true)
      $('#Cubiculo').val( pasarMayuscula(info[0].cubiculo) )
      $('#Tel').val(info[0].telefono)
      $('#Ext').val(info[0].ext)
      $("#TipoEquipo option[value='"+ info[1].tipo +"']").attr("selected", true)
      $('#Marca').val((info[1].marca).toUpperCase())
      $('#Modelo').val((info[1].modelo))
      $('#NumSerie').val(info[1].no_serie)
      $('#NumInventario').val(info[1].no_inventario)
      $('#MACAddress').val( pasarMayuscula(info[1].mac_address))
      $('#Hora').val(obtenerHora())
      $('#picker').val(obtenerFecha())
      $('#idE').val(num)
    }
  });
}

function obtenerSemestre(){
  $.ajax({
    url: 'solicitud_controller/buscarSemestre',
    dataType: 'json',
    type: 'get',
    success: function(semestre) {
      $('#semestre').val(semestre[0].id_semestre)
    }
  });
}

function pasarMayuscula(cadena){
  if (cadena != null) {
    return cadena.toUpperCase().charAt(0) + cadena.substring(1, cadena.length)
  }
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
//  if (dia < 10) {
//    dia = "0"+dia
//  }
  var mes = (new Date()).getMonth()+1;
  var año = (new Date()).getFullYear();

  dia = formatoFecha(dia)
  mes = formatoFecha(mes)

  return año + "-" + mes + "-" + dia
//var fecha= año + "-" + mes + "-" + dia
//  var fecha = dia + "-" + mes + "-" +año
  //console.log(fecha)
}

function formatoFecha(valor){
  if (valor < 10) {
    return "0"+valor
  }else {
    return valor
  }
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
  $('#Modelo').val("")
  $('#NumSerie').val("")
  $('#NumInventario').val("")
  $('#MACAddress').val("")
  $('#Hora').val("")
  $('#picker').val("")
  $('#HOST').val("")
  $('#idE').val("")
}

function enviarFormulario(){
  let datos = $('#FormularioEquipo').serialize()
  $.ajax({
    url: 'solicitud_controller/recibirDatos',
    dataType: 'json',
    type: 'post',
    data: datos,
    success: function(data) {
      if(data.status==0){
        alert(data.error)
      }else {
        location.href ="solicitud";
      }
    }
  });
}
