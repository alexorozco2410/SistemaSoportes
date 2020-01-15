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

  public function checarResguardo($datos){
    $id_resguardo = "select historial_resguardo.id_resguardo from historial_resguardo join
    equipo on equipo.id_equipo=historial_resguardo.id_equipo where equipo.no_serie =
    '".$datos['numSerie']."' or equipo.no_inventario = '".$datos['numInventario']."' ";
    return $this->db->query($id_resguardo)->result();
  }

  public function registrarEquipo($datos){
    $datos_equipo = "insert into equipo(tipo, marca, modelo, no_serie, no_inventario, host,
    mac_address) values( ".$datos['equipo']." ,  ".$datos['marca']." , ".$datos['modelo'].",
     ".$datos['numSerie']." ,  ".$datos['numInventario']." ,  ".$datos['host']." ,
     ".$datos['mac']." )";

    $this->db->query($datos_equipo);
  }

  public function registrarSolicitud(){

  }

}
