<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RenunganPagi extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('SBU/renungan_pagi');
		$this->load->view('templates/footer');
	}
}
