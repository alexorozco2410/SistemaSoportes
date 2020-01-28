<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historial_model extends CI_Model {
  public function buscarTodo(){
    $historial = "select folio, equipo.tipo, usuario.nombre, usuario.apellido_paterno,
    cubiculo, nombre_integrante, historial.fecha_inicio, historial.fecha_fin, estatus from
    integrante_uc join historial on
    integrante_uc.numero_cuenta = historial.numero_cuenta join soportes on soportes.id_solicitud =
    historial.id_solicitud join equipo on equipo.id_equipo = soportes.id_equipo join resguardo on
    resguardo.id_equipo = equipo.id_equipo join usuario on usuario.id_usuario = resguardo.id_equipo";
    return $this->db->query($historial)->result();
  }
}
