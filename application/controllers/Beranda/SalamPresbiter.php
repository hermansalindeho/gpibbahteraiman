<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalamPresbiter extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('beranda/salam_presbiter');
		$this->load->view('templates/footer');
	}
}
