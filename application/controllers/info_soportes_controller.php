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
}
