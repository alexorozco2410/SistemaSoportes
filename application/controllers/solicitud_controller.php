<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud_controller extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

	public function index()
	{
    if ($_SESSION['logged_in']) {
      $this->load->view('inicio');
      $this->load->view('nav');
      $this->load->view('Solicitud');
      $this->load->view('footer');
      $this->load->view('final');
    }else{
      $this->load->view('login');
    }
	}

  public function obtenerEquipos(){
    $this->load->model('solicitud_model');
    $equipos = $this->solicitud_model->buscarEquipo($_SESSION['id_usuario']);
    //var_dump($equipos);

    if($equipos!=[]){
      $newdata = array(
     'tipo'  => $equipos[0]->equipo,
            );
       $this->session->set_userdata($newdata);
    }
  }

}
