function logout(){
  $.ajax({
    url: 'login_controller/logoutUsuario',
    function() {
        alert('saliendo del sistema')
        location.href ="./login";
      }
  });
  alert('saliendo del sistema')
  location.href ="./login";
}
