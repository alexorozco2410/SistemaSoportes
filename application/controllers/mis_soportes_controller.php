<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mis_Soportes_controller extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

	public function index()
	{
		$this->load->view('inicio');
    $this->load->view('nav');
    $this->load->view('mis_soportes');
    $this->load->view('footer');
    $this->load->view('final');
	}
}
