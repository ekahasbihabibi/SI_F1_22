<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login/form_login');
	}

	public function pendaftaran()
	{
		$this->load->view('login/form_pendaftaran');
	}
}
