<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historial_model extends CI_Model {
  public function buscarTodosSoportes(){
    $info = "select folio, equipo, usuario, cubiculo, nombre, fecha_inicio, fecha_final, avance
    from equipo JOIN usuario ON equipo.id_usuario=usuario.id_usuario JOIN soportes ON";
    return $this->db->query($info)->result();
  }
}
