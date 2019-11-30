<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mis_soportes_model extends CI_Model {
  public function buscarMisSoportes($usuarioID){
    $mis_soportes = "select problema, estatus, fecha_solicitud from soportes join usuario on usuario.id_usuario =
    soportes.id_usuario where soportes.id_usuario= '".$usuarioID."' order by fecha_solicitud DESC";
    return $this->db->query($mis_soportes)->result();
  }
}
