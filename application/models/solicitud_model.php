<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud_model extends CI_Model {
  public function buscarInfo($equipoID, $usuarioID){
    $info = "select * from equipo JOIN usuario ON equipo.id_usuario=usuario.id_usuario
    where equipo.id_equipo = '".$equipoID."' and usuario.id_usuario= '".$usuarioID."' ";
    return $this->db->query($info)->result();
  }
}
