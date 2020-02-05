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

  public function Detalles($idSolicitud, $idEquipo, $idHistorial){
    $this->load->model('solicitud_model');
    $Equipo = $this->solicitud_model->buscarInfo($idEquipo);
    $this->load->model('info_soportes_model');
    $Soportes = $this->info_soportes_model->infoSoporte($idSolicitud);
    //$Solicitud = $this->info_soportes_model
  //  echo json_encode($Equipo);
    $info = array_merge($Equipo, $Soportes);
    var_dump($info);
  }

}
