<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abouts extends CI_Controller {
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('about/about');
		$this->load->view('templates/footer');
	}
}
