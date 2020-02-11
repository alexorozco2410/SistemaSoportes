function buscarTodosIntegrantes(){
  $.ajax({
    url: 'info_soportes_controller/buscarIntegrantes',
    dataType: 'json',
    type: 'get',
    success: function(integrantes) {
      console.log(integrantes);
      var nombreIntegrante = [];
      //var numero_cuenta = [];
      //$('#idIntegrante').val(integrantes[0].numero_cuenta);
      for (var i = 0; i < integrantes.length; i++) {
        console.log(integrantes[i].numero_cuenta)
        nombreIntegrante =  '<option' + ' ' + 'onclick="agregarNC('+
        integrantes[i].numero_cuenta +')"'  +'value="' + integrantes[i].nombre_integrante + ' ' + integrantes[i].ap_pat_integrante + '">'
        + integrantes[i].nombre_integrante + ' ' + integrantes[i].ap_pat_integrante + '</option>'
        $('#IUCElegido').append(nombreIntegrante);
      }
      IntInvolucrados();
      problemaReportado();
    }
  });
}

function problemaReportado(){
  var aux = localStorage.getItem('gIDS').split(',')
  $.ajax({
    url: 'info_soportes_controller/buscarProblemaReportado/'+aux[0],
    dataType: 'json',
    type: 'get',
    success: function(problema) {
      var prob= '<p class="form-control" id="Problema">'+ problema[0].problema +'</p>'
      $('#ProbReportado').append(prob);
    }
  });
}

function agregarNC(numCuenta){
  $('#idIntegrante').val(numCuenta);
}


function AsignarIntegrante(){
  let datos = $('#AsignarIUC').serialize();//se toman los datos del formulario con id "login"
  var aux = localStorage.getItem('gIDS').split(',')
  $.ajax({
    url: 'info_soportes_controller/asignarIntegrante/'+ aux[0],
    dataType: 'json',
    type: 'post',
    data: datos,
    success: function(data) {
      //  console.log(data);
      IntInvolucrados();
    }
  });
}

function IntInvolucrados(){
  var aux = localStorage.getItem('gIDS').split(',')
  $.ajax({
    url: 'info_soportes_controller/involucrados/'+aux[0],
    dataType: 'json',
    type: 'get',
    success: function(inv) {
      //console.log(inv);
      var datoinv = ''
      for (var i = 0; i < inv.length; i++) {
        datoinv = datoinv + ' ' + inv[i].nombre_integrante + ' ' + inv[i].ap_pat_integrante + ' '
      }
      $('#involucrados').append(datoinv);
    }
  });
}

function TerminarSoporte(){
  let datos = $('#STermino').serialize();//se toman los datos del formulario con id "login"
  var aux = localStorage.getItem('gIDS').split(',')
  $.ajax({
    url: 'info_soportes_controller/terminoSoporte/'+ aux[0],
    dataType: 'json',
    type: 'post',
    data: datos,
    success: function(data) {
      //  console.log(data);
      //console.log(solucion);
      if (data.cambio == 1) {
        alert('Se ha indicado que el soporte terminó')
      }
    }
  });
}
