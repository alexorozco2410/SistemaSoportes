function buscarEquipos(){
  $.ajax({
    url: 'solicitud_controller/obtenerEquipos',
  });
  location.href ="./solicitud";
}
