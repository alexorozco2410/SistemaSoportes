<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud_model extends CI_Model {
  public function buscarInfo($equipoID){
    $info_equipo = "select * from equipo where equipo.id_equipo = '".$equipoID."' ";
    return $this->db->query($info_equipo)->result();
  }

  public function infoUsuario($usuarioID){
    $info_usuario = "select * from usuario where usuario.id_usuario = '".$usuarioID."'";
    return $this->db->query($info_usuario)->result();
  }
}
