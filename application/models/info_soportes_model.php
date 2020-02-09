<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_soportes_model extends CI_Model {
  public function infoEquipo($equipoID){
    $info_equipo = "select * from equipo where equipo.id_equipo = '".$equipoID."' ";
    return $this->db->query($info_equipo)->result();
  }

  public function infoSoporte($idEquipo){
    $infoS = "select soportes.estatus, soportes.instalacion_sw, soportes.problema, desc_actividad,
    integrante_uc.nombre_integrante, ap_pat_integrante, historial.fecha_fin from soportes join historial on
    historial.id_solicitud=soportes.id_solicitud join integrante_uc on integrante_uc.numero_cuenta
    =historial.numero_cuenta join equipo on equipo.id_equipo=soportes.id_equipo
    where soportes.id_equipo = '".$idEquipo."' and historial.folio is not null";
    return $this->db->query($infoS)->result();
  }

  public function infoResponsable($idEquipo){
    $resp = "select usuario.* from usuario join resguardo on resguardo.id_usuario = usuario.id_usuario
    join equipo on equipo.id_equipo = resguardo.id_equipo where equipo.id_equipo= '".$idEquipo."' and
    termino_resguardo is null ";
    return $this->db->query($resp)->result();
  }

  public function obtenerFecha($idSolicitud){
    $datos = "select soportes.fecha_solicitud, historial.hora_inicio from soportes join historial on
    soportes.id_solicitud = historial.id_solicitud where soportes.id_solicitud='".$idSolicitud."' and
    historial.folio is not null ";
    return $this->db->query($datos)->result();
  }

  public function obtenerIntegrantes(){
    $info = "select nombre_integrante, ap_pat_integrante, numero_cuenta from integrante_uc";
    return $this->db->query($info)->result();
  }

  public function AsigIUC($numero_cuenta, $idSolicitud){
    $asignar = "insert into historial(id_solicitud, numero_cuenta) values('".$idSolicitud."', '".$numero_cuenta."')";
    $this->db->query($asignar);
  }

  public function obtenerInvolucrados($idSolicitud){
    $v = "select integrante_uc.nombre_integrante, integrante_uc.ap_pat_integrante from integrante_uc join
    historial on integrante_uc.numero_cuenta=historial.numero_cuenta where historial.id_solicitud = '".$idSolicitud."'";
    return $this->db->query($v)->result();
  }

  public function obtenerProblema($idSolicitud){
    $p = "select soportes.problema from soportes where soportes.id_solicitud= '".$idSolicitud."'";
    return $this->db->query($p)->result();
  }

  public function soporteTerminado($idSolicitud){
    $t = "update soportes set estatus ='Terminado' where id_solicitud='".$idSolicitud."' ";
    $this->db->query($t);
  }
}
