function login(){
  let datos = $('#login').serialize();//se toman los datos del formulario con id "login"

  $.ajax({
    url: 'login_controller/logUsuario',
    dataType: 'json',
    type: 'post',
    data: datos,
    success: function(data) {
      if(data.status==0){
        alert(data.error)
      }else {
        alert('Bienvenido al sistema')
        location.href ="./solicitud";
      }
    }
  });
}
