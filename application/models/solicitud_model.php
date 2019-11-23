<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud_model extends CI_Model {
  public function buscarEquipo($usuarioID){
    $equipo = "select CONCAT(tipo, marca) as equipo from equipo join usuario on equipo.id_usuario=usuario.id_usuario
     where usuario.id_usuario='".$usuarioID."'";
    return $this->db->query($equipo)->result();
  }
}
