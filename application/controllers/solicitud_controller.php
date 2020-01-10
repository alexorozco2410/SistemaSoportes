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
      $this->load->view('Login');
    }
	}

  public function informacionEquipo($id_equipo){
    $this->load->model('solicitud_model');
    //$info = $this->solicitud_model->buscarInfo($id_equipo, $_SESSION['id_usuario']);//obtiene toda la informacion del formulario
    //var_dump($info);
    $info_equipo = $this->solicitud_model->buscarInfo($id_equipo);//obtiene toda la informacion del formulario
    //var_dump($info);
    $info_usuario = $this->solicitud_model->infoUsuario($_SESSION['id_usuario']);
    $info = array_merge($info_usuario, $info_equipo);
    echo json_encode($info);
    //var_dump($info);
  }

  public function recibirDatos(){
    //verifica que se eingresen los datos marcados con la etiqueta "name" en el archivo php
    //por ejemplo name = "nombre"
    $this->form_validation->set_message('required', 'Es necesario ingresar el campo %s.');
    $this->form_validation->set_rules('nombre', 'nombre', 'required');
    $this->form_validation->set_rules('ApPat', 'apellido paterno', 'required');
    $this->form_validation->set_rules('departamento', 'departamento', 'required');
    $this->form_validation->set_rules('cubiculo', 'cubiculo', 'required');
    $this->form_validation->set_rules('tipoE', 'equipo', 'required');
    $this->form_validation->set_rules('problema', 'problema', 'required');

    if ($this->form_validation->run() == FALSE) {
      echo json_encode(array('status' => 0, 'error' => 'faltan datos importantes'));
    }else {
      $this->load->model('solicitud_model');

      $datos = array(
        'nombre' => $this->input->post('nombre'),
        'apPat' => $this->input->post('ApPat'),
        'apMat' => $this->input->post('ApMat'),
        'departamento' => $this->input->post('departamento'),
        'cubiculo' => $this->input->post('cubiculo'),
        'tel' => $this->input->post('telefono'),
        'ext' => $this->input->post('ext'),
        'equipo' => $this->input->post('tipoE'),
        'marca' => $this->input->post('marca'),
        'numSerie' => $this->input->post('numSerie'),
        'numInventario' => $this->input->post('numInventario'),
        'mac' => $this->input->post('mac'),
        'host' => $this->input->post('host'),
        'e-s' => $this->input->post('e-s'),
        'fecha' => $this->input->post('fecha'),
        'hora' => $this->input->post('hora'),
        'problema' => $this->input->post('problema'),
        'idEquipo' => $this->input->post('idE'),
      );
    //  $nombre = $this->input->post('nombre');
    //  $apPat = $this->input->post('ApPat');
    //  $apMat = $this->input->post('ApMat');
    //  $departamento = $this->input->post('departamento');
    //  $cubiculo = $this->input->post('cubiculo');
      // $tel = $this->input->post('telefono');
    //  $ext = $this->input->post('ext');
    //  $equipo = $this->input->post('tipoE');
      if ($datos['idEquipo'] != null) {
          $this->solicitud_model->registrarSolicitud($datos);
          //echo json_encode(array('status' => 0, 'error' => 'no esta el equipo en registro'));
      }else{
        var_dump($datos['mac']);
        $verificar = $this->solicitud_model->registrarEquipo($datos);
        echo json_encode(array('status' => 0, 'error' => 'se registro el equipo'));
        var_dump($verificar);
      }
    }

  }

}
