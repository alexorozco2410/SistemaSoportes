<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mis_soportes_model extends CI_Model {
  public function buscarMisSoportes($usuarioID){
    $mis_soportes = "select equipo.tipo, equipo.no_inventario, soportes.* from soportes join equipo on equipo.id_equipo
    = soportes.id_equipo join historial_resguardo on historial_resguardo.id_equipo =
    equipo.id_equipo join usuario on usuario.id_usuario = historial_resguardo.id_usuario
    where usuario.id_usuario= '".$usuarioID."' order by fecha_solicitud DESC";
    return $this->db->query($mis_soportes)->result();
  }
}
