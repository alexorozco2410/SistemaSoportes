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

  /*public function checarResguardo($datos){
    $id_resguardo = "select resguardo.id_resguardo from resguardo join
    equipo on equipo.id_equipo=resguardo.id_equipo where resguardo.id_equipo =
    '".$datos['idEquipo']."'  ";
    return $this->db->query($id_resguardo)->result();
  }*/

  public function registrarEquipo($datos){
    $datos_equipo = "insert into equipo(tipo, marca, modelo, no_serie, no_inventario, host,
    mac_address) values( ".$datos['equipo']." ,  ".$datos['marca']." , ".$datos['modelo'].",
     ".$datos['numSerie']." ,  ".$datos['numInventario']." ,  ".$datos['host']." ,
     ".$datos['mac']." )";

    $this->db->query($datos_equipo);
  }

  public function semestreActual(){
    $semestre = "select id_semestre from semestre where id_semestre = (select MAX(id_semestre) as semestre from semestre)";
    return $this->db->query($semestre)->result();
  }

  public function registrarSolicitud($datos){

    $datos_solicitud = "insert into soportes(id_semestre, id_equipo, problema, fecha_solicitud)
    values(".$datos['idSemestre'].", ".$datos['idEquipo'].", ".$datos['problema'].", ".$datos['fecha'].")";

    $this->db->query($datos_solicitud);
  }

}
