<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
  public function validarSesion($usuario, $contraseña){
    $query = "select id_usuario from usuario where nombre_usuario='".$usuario."' and contrasena='".$contraseña."'";
    return $this->db->query($query)->result();
  }

  public function buscarEquipo($usuarioID){
    $equipo = "select CONCAT(tipo, ' ', marca) as equipo, id_equipo from equipo join usuario on equipo.id_usuario=usuario.id_usuario
     where usuario.id_usuario='".$usuarioID."'";
    return $this->db->query($equipo)->result();
  }

}
