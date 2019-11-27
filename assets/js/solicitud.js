function llenarFormulario(num){
  $.ajax({
    url: 'solicitud_controller/informacionEquipo/' + num,
    dataType: 'json',
    type: 'get',
    success: function(info) {
      console.log(info)
      $('#Nombre').val(info[0].nombre)
      $('#ApellidoPat').val(info[0].apellido_paterno)
      $('#TipoEquipo').val(info[0].tipo)



    }
  });
}
