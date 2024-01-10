<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/profil/index');
		$this->load->view('templates/footer');
	}
}
