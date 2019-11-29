<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

	public function index()
	{
		$this->load->view('login');
	}
  public function logUsuario(){
    $this->form_validation->set_message('required', 'Es necesario ingresar el campo %s.');

    $this->form_validation->set_rules('inputPassword', 'Contraseña', 'required');
    $this->form_validation->set_rules('inputUsuario', 'Nombre de usuario', 'required');

    if ($this->form_validation->run() == FALSE)
               {
                       echo json_encode(array('status' => 0, 'error' => 'faltan datos obligatorios'));
               }
               else
               {
                       $this->load->model('login_model');
                       $usuario = $this->input->post('inputUsuario');
                       $contraseña = $this->input->post('inputPassword');
                       $id_usuario = $this->login_model->validarSesion($usuario, $contraseña);
                       //var_dump($id_usuario);
                       if($id_usuario==[]){
                         echo json_encode(array('status' => 0, 'error' => 'Usuario o contraseña incorrectos'));
                       }else{
                         $newdata = array(
                        'id_usuario'  => $id_usuario[0]->id_usuario,
                        'usuario'     => $usuario,
                        'logged_in' => TRUE
                               );

                          $this->session->set_userdata($newdata);
                          echo json_encode(array('status' => 1));
                       }

               }
  }
  public function logoutUsuario(){
    session_destroy();
    $this->load->view('login');
  }

  public function obtenerEquipos(){
    $this->load->model('login_model');
    $equipos = $this->login_model->buscarEquipo($_SESSION['id_usuario']);
  //  var_dump($equipos);
/*
    for ($i=0; $i < count($equipos); $i++) {
      $newdata = array(
        'tipo' => $equipos[$i]->equipo
      );
    }
    $this->session->set_userdata($newdata);
*/
   echo json_encode($equipos);
  }

}
