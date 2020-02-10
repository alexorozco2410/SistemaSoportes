<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_Soportes_Controller extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

	public function index()
	{
		$this->load->view('inicio');
    $this->load->view('nav');
    $this->load->view('info_soporte');
    $this->load->view('footer');
    $this->load->view('final');
	}

  public function guardarID($idSolicitud, $idEquipo, $idHistorial){
    $_SESSION['idBEquipo'] = $idEquipo;
    $_SESSION['idBSolicitud'] = $idSolicitud;
    $_SESSION['idBHistorial'] = $idHistorial;
    var_dump($_SESSION['logged_in']);
    var_dump($_SESSION['idBSolicitud']);
    var_dump($_SESSION['idBEquipo']);
    var_dump($_SESSION['idBHistorial']);
  }

  public function Detalles($idSolicitud, $idEquipo, $idHistorial){
    $this->load->model('solicitud_model');
    $Equipo = $this->solicitud_model->buscarInfo($idEquipo);
    $this->load->model('info_soportes_model');
    $SoportesAnteriores = $this->info_soportes_model->infoSoporte($idEquipo);
    $responsableBien = $this->info_soportes_model->infoResponsable($idEquipo);
    $fechayhora_sol = $this->info_soportes_model->obtenerFecha($idSolicitud);
    //$Solicitud = $this->info_soportes_model
  //  var_dump($_SESSION);
    //var_dump($Equipo);
    //var_dump($_SESSION['idBSolicitud']);
    //var_dump($_SESSION['idBEquipo']);
    //var_dump($_SESSION['idBHistorial']);
    $info = array_merge($Equipo, $responsableBien, $fechayhora_sol, $SoportesAnteriores);
    //var_dump($info);
    echo json_encode($info);
  }

  public function buscarIntegrantes(){
    $this->load->model('info_soportes_model');
    $integrantes = $this->info_soportes_model->obtenerIntegrantes();
    //var_dump($integrantes);
    echo json_encode($integrantes);
  }

  public function asignarIntegrante(){
    $nombre = $this->input->post('IUCElegido');
    $numero_cuenta = $this->input->post('idIntegrante');
    //  $contraseña = $this->input->post('inputPassword');
    //  var_dump($nombre);
    //  var_dump($numero_cuenta);
    //$integrante = array_merge($nombre, $numero_cuenta);
    $this->load->model('info_soportes_model');
    $agregarIntegrante = $this->info_soportes_model->AsigIUC($numero_cuenta, $_SESSION['idBSolicitud']);
    echo json_encode($nombre);
  }

  public function involucrados(){
    $this->load->model('info_soportes_model');
    $valores = $this->info_soportes_model->obtenerInvolucrados($_SESSION['idBSolicitud']);
    echo json_encode($valores);
    //var_dump($valores);
  }

  public function buscarProblemaReportado(){
    $this->load->model('info_soportes_model');
    $problema = $this->info_soportes_model->obtenerProblema($_SESSION['idBSolicitud']);
    echo json_encode($problema);
  }

  public function terminoSoporte(){
    $descripcion = $this->input->post('SolucionSoporte');
    //var_dump($descripcion);
    $this->load->model('info_soportes_model');
    $terminar = $this->info_soportes_model->soporteTerminado($_SESSION['idBSolicitud']);
//    echo json_encode($terminar);
    echo json_encode(array('cambio' => 1));
  }

}
