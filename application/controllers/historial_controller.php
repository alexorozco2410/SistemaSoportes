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
    $this->load->view('final');
	}
}
