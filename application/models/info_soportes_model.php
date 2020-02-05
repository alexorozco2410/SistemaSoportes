<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_soportes_model extends CI_Model {
  public function infoEquipo($equipoID){
    $info_equipo = "select * from equipo where equipo.id_equipo = '".$equipoID."' ";
    return $this->db->query($info_equipo)->result();
  }

  public function infoSoporte($idSolicitud){
    $infoS = "select soportes.instalacion_sw, soportes.problema, desc_actividad,
    integrante_uc.nombre_integrante, ap_pat_integrante, historial.fecha_fin from soportes join historial on
    historial.id_solicitud=soportes.id_solicitud join integrante_uc on integrante_uc.numero_cuenta
    =historial.numero_cuenta where soportes.id_solicitud = '".$idSolicitud."'";
    return $this->db->query($infoS)->result();
  }

}
