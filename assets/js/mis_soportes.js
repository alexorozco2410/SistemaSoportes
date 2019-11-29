function obtenerMisSoportes(){
  $.ajax({
    url: 'mis_soportes_controller/buscarMisSoportes',
    dataType: 'json',
    type: 'get',
    success: function(misSoportes){
      //$('#listaEquipos').val(info[0].nombre)
      for (var i = 0; i < misSoportes.length; i++) {
        var filaTabla = '<tr>'
                          + '<td>"'+ +'"</td>'
                          + '<td>"'+ +'"</td>'
                          + '<td>"'+ +'"</td>'
                          + '<td>"'+ +'"</td>'
                          + '<td>"'+ +'"</td>'
                          + '<td>"'+ +'"</td>'
                          + '<td class="descprob">"'+ +'"</td>'
                      + '</tr>'
        $('#listaEquipos').append(botonEquipo);
      }
    //  console.log(equipos)
    //  console.log(equipos.length)
    }
  });
}
