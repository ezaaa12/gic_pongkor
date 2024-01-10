<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/informasi/index');
		$this->load->view('templates/footer');
	}
}
