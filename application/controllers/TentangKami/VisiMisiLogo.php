<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisiLogo extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('tentangkami/visimisilogo');
		$this->load->view('templates/footer');
	}
}