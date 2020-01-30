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

  public function buscarTodosSoportes($numero){
    switch ($numero) {
      case '1':
        $estado = '\'%\'';
        break;
      case '2':
        $estado = '\'Terminado\'';
        break;
      case '3':
        $estado = '\'Pendiente\'';
        break;
      case '4':
        $estado = '\'En proceso\'';
        break;
      default:
        $estado = '\'%\'';
        break;
    }
    $this->load->model('historial_model');
    $todos_soportes = $this->historial_model->buscarTodo($estado);
    echo json_encode($todos_soportes);
    //var_dump($todos_soportes);
  }
}
