

var gIDS = [];
var nm = []
//var detalles = [];
function todosSoportes(numero){
  $.ajax({
    url: 'historial_controller/buscarTodosSoportes/' + numero,
    dataType: 'json',
    type: 'get',
    success: function(todosSoportes){
      var p = "Pendiente"
      var status = ["Terminado", "En proceso"];
      var tabla = '<tbody id="historial">'
      var ids = []
      for (var i = 0; i < todosSoportes.length; i++) {
        if (todosSoportes[i].estatus == p) {
          clase = "class=soporte-pendiente"
          nm = "sin asignar"
        }else {
          clase = ""
        //  aux = buscarIntegrante(todosSoportes[i].id_historial)
          todosSoportes[i].nombre_integrante = buscarIntegrante(todosSoportes[i].id_solicitud)
          //console.log((todosSoportes[i].nombre_integrante))
          nm = localStorage.getItem('Name')
        }
        ids[0] = todosSoportes[i].id_solicitud
        ids[1] = todosSoportes[i].id_equipo
        ids[2] = todosSoportes[i].id_historial
    //    console.log(ids);
      //  tabla = tabla + '<tr' + ' ' + clase + ' ' + 'onclick="buscarDetalles('
      //  + ids[0] + ',' + ids[1] + ',' + ids[2] + ')"' + '>'
        tabla =  tabla + '<tr' + ' ' + clase + ' ' + 'onclick="guardarID(' + ids[0] + ',' + ids[1] + ',' + ids[2] + ')"' + '>'
                      +  '<td>' + todosSoportes[i].folio + '</td>'
                      +  '<td>' + todosSoportes[i].tipo + '</td>'
                      +  '<td>' + todosSoportes[i].nombre + ' '
                              + todosSoportes[i].apellido_paterno + '</td>'
                      +  '<td>' + todosSoportes[i].cubiculo + '</td>'
                      +  '<td>' + nm + '</td>'
                      +  '<td>' + todosSoportes[i].fecha_inicio + '</td>'
                      +  '<td>' + todosSoportes[i].fecha_fin + '</td>'
                      +  '<td>' + todosSoportes[i].estatus + '</td>'
                      + '</tr>'
      }
      tabla = tabla + '<tbody>'
      $('#historial').replaceWith(tabla);
    }
  });

}

function guardarID(idSolicitud, idEquipo, idHistorial){
  gIDS[0] = idSolicitud
  gIDS[1] = idEquipo
  gIDS[2] = idHistorial
//  console.log(gIDS)
//  detallesSoporte()
  localStorage.setItem('gIDS', gIDS)
  //buscarDetalles();
  location.href = "./informacion_soportes";
}



function buscarIntegrante(idHistorial){
//
  return $.ajax({
    url: 'historial_controller/buscarIntegrante/' + idHistorial,
    dataType: 'json',
    type: 'get',
    success: function(integrante){
    //  console.log(integrante[0].nombre_integrante)
    //  return integrante[0].nombre_integrante
    //  aux = + integrante[0].nombreIntegrante;
    //  console.log(aux);
    localStorage.setItem('Name', integrante[0].nombre_integrante)
    //return integrante[0].nombre_integrante;
    }
  //  console.log(aux);
  });
  //console.log(aux)
}

function detallesSoporte(){
  $.ajax({
  //  url: 'historial_controller/buscarDetalles',
    function() {
        alert('cambiando')
        location.href ="./info_soporte";
      }
  });
//  alert('buscando')
  location.href ="./informacion_soportes";
}

function buscarDetalles(){
//  console.log(gIDS);
  $.ajax({
    url: 'info_soportes_controller/guardarID/' + gIDS[0] + '/' + gIDS[1] + '/' + gIDS[2],
    dataType: 'json',
    type: 'post',
    success: function(){
    //  console.log(informacion[0]);
    //  location.href = "./informacion_soportes";
      //var vari = '<p>'+informacion[0].host+'</p>'
    //  document.getElementById("TipoEquipo").innerHTML = var1
      //  $('#TipoEquipo').append(informacion[0].tipo)
        //$('#TipoEquipo').val(informacion[0].tipo)
        //$('#Marca').val((informacion[0].marca).toUpperCase())
        //$('#Modelo').val((informacion[0].modelo))
        //$('#NoSerie').val(informacion[0].no_serie)
        //$('#NoInventario').val(informacion[0].no_inventario)
        //$('#MAC').val( informacion[0].mac_address)
        //detallesSoporte();
      //  detallesSoporte();
    //  return informacion[0];
    }
  });
 //location.href = "./informacion_soportes";
}

function obtenerHistorico(){
  var aux = localStorage.getItem('gIDS').split(',')
  console.log(aux[1])
  $.ajax({
    url: 'info_soportes_controller/Detalles/'+ aux[0] +'/'+ aux[1] +'/'+aux[2],
    dataType: 'json',
    type: 'get',
    success: function(informacion){
      //console.log(informacion);
    //  location.href = "./informacion_soportes";
      //var vari = '<p>'+informacion[0].host+'</p>'
    //  document.getElementById("TipoEquipo").innerHTML = var1
        $('#equipoTitulo').append(informacion[1].nombre+ ' ' +
        informacion[1].apellido_paterno + ': '+ informacion[0].tipo + ' ' + informacion[0].marca)
        $('#FechayHora').append(informacion[2].fecha_solicitud + ' / ' + informacion[2].hora_inicio);

        $('#TipoEquipo').append(informacion[0].tipo)
        $('#Marca').append((informacion[0].marca).toUpperCase())
        $('#Modelo').append((informacion[0].modelo))
        $('#NoSerie').append(informacion[0].no_serie)
        $('#NoInventario').append(informacion[0].no_inventario)
        $('#MAC').append( informacion[0].mac_address)
        $('#Host').append( informacion[0].host)
        var auxNombre = informacion[1].nombre + ' ' + informacion[1].apellido_paterno
        + ' ' + informacion[1].apellido_materno
        $('#Nombre').append( auxNombre)
        $('#Departamento').append( informacion[1].departamento)
        $('#Cubiculo').append( informacion[1].cubiculo)
        $('#Telefono').append( informacion[1].telefono)
        $('#Ext').append( informacion[1].ext)

        console.log(informacion[2])
        if (informacion.length >= 3) {
          var etiqueta = []
          for (var i = 3; i < informacion.length; i++) {
            etiqueta = '<div class="row justify-content-left box-hist card">' +
             '<!--informacion de quien y cuando se hizo el soporte-->' +
              '<div class="card-body">' +
                '<div class="row">' +
                  '<div class="col-md-2 col-sm-2 col-xs-12">' +
                    '<h6>Integrante(s) UC</h6>' +
                    '<p class="form-control sol-ovfw" id="IntegranteUC">'
                    +informacion[i].nombre_integrante + ' ' + informacion[i].ap_pat_integrante +'</p>' +
                  '</div>'+
                  '<div class="col-md-2 col-sm-2 col-xs-12">'+
                    '<h6>Fecha</h6>'+
                    '<p class="form-control" id="Fecha">'+ informacion[i].fecha_fin +'</p>'+
                  '</div>'+
                  '<!--Problema reportado-->'+
                  '<div class="col-md-8 col-sm-8 col-xs-12">'+
                    '<h6>Problema reportado</h6>'+
                    '<p class="form-control sol-ovfw" id="Problema">'+ informacion[i].problema +'</p>'+
                  '</div>'+
                  '<!--si se instaló algun SW-->'+
                  '<div class="col-md-12 col-sm-12 col-sx-12">'+
                    '<h6>Software instalado</h6>'+
                    '<p class="form-control sol-ovfw" id="SW"></p>'+
                  '</div>'+
                  '<!--Equipos a resguardo-->'+
                  '<div class="col-md-12 col-sm-12 col-sx-12">'+
                    '<h6>Equipos que quedaron a resguardo</h6>'+
                    '<p class="form-control sol-ovfw" id="Resguardo"></p>'+
                  '</div>'+
                  '<!--Solucion dada-->'+
                  '<div class="col-md-12 col-sm-12 col-xs-12">'+
                    '<h6>Solución</h6>'+
                    '<p class="form-control reg-sol card-text" id="Solucion">'+
                      informacion[i].desc_actividad +
                  '  </p>'+
                  '</div>'+
                '</div>'+
            '  </div>'+
            '</div>'
            $('#RegistroHistorial').append(etiqueta);
            //console.log(i);
          }
        }
    }
  });
}
