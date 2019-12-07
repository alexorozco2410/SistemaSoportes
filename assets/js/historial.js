function obtenerSoportes(){
  $.ajax({
    url: 'historial_controller/buscarHistorial',
    dataType: 'json',
    type: 'get',
    success: function(todosSoportes){

  });

}
