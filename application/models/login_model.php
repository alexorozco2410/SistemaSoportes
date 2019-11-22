<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
  public function validarSesion($usuario, $contraseña){
    $query = "select id_usuario from usuario where nombre_usuario='".$usuario."' and contrasenia='".$contraseña."'";
    return $this->db->query($query)->result();
  }
}
