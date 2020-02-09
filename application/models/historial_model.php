<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historial_model extends CI_Model {
  public function buscarTodo($estado){
    $historial = "select id_historial, folio, equipo.id_equipo, equipo.tipo, usuario.nombre,
    usuario.apellido_paterno, cubiculo, historial.id_solicitud,
    historial.fecha_inicio, historial.fecha_fin, estatus from historial join soportes on
    soportes.id_solicitud =
    historial.id_solicitud join equipo on equipo.id_equipo = soportes.id_equipo join resguardo on
    resguardo.id_equipo = equipo.id_equipo join usuario on usuario.id_usuario = resguardo.id_equipo
    where soportes.estatus like ".$estado."";
    return $this->db->query($historial)->result();
  }

  public function obtenerIntegrante($idHistorial){
    $integrante = "select nombre_integrante from integrante_uc join historial on
    integrante_uc.numero_cuenta=historial.numero_cuenta where historial.id_solicitud = ".$idHistorial."";
    return $this->db->query($integrante)->result();
  }
}
