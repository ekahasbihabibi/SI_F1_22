<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/header_login');
		$this->load->view('login/form_login');
		$this->load->view('layouts/footer_login');

	}

	public function register()
	{
		$this->load->view('login/form_pendaftaran');		
	}
}