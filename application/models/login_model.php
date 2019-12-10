<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
  public function validarSesion($usuario, $contraseña){
    $query = "select id_usuario from usuario where nombre_usuario='".$usuario."' and contrasena='".$contraseña."'";
    return $this->db->query($query)->result();
  }

  public function buscarEquipo($usuarioID){
    $equipo = "select CONCAT(tipo, ' ', marca) as equipo, equipo.id_equipo from usuario join historial_resguardo on
    usuario.id_usuario=historial_resguardo.id_usuario JOIN equipo on equipo.id_equipo=historial_resguardo.id_equipo
    where usuario.id_usuario='".$usuarioID."'";
    return $this->db->query($equipo)->result();
  }

}
