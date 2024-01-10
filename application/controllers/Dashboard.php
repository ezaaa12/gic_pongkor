<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('templates/topbar_admin');
		$this->load->view('pages/admin/index');
		$this->load->view('templates/footer_admin');
	}
}
