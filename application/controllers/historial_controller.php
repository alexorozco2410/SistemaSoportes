<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historial_controller extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

	public function index()
	{
		$this->load->view('inicio');
    $this->load->view('nav');
    $this->load->view('historial');
    $this->load->view('footer');
    $this->load->view('final');
	}

  public function buscarTodosSoportes(){
    $this->load->model('historial_model');
    $todos_soportes = $this->historial_model->buscarTodo();
    echo json_encode($todos_soportes);
    //var_dump($todos_soportes);
  }

  public function soportesTerminados(){
    $this->load->model('historial_model');
    $soportes_terminados = $this->historial_model->buscarTerminados();
    echo json_encode($soportes_terminados);
  }

  public function soportesPendientes(){
    $this->load->model('historial_model');
    $soportes_pendientes = $this->historial_model->buscarPendientes();
    echo json_encode($soportes_pendientes);
  }

  public function soportesEnProceso(){

  }
}
