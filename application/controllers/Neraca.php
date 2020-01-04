<?php

class Neraca extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('templates/header', ['title' => 'Neraca']);
		$this->load->view('neraca/index');
		$this->load->view('templates/footer');
	}
}