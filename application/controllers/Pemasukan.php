<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header', ['title' => 'Total pemasukan']);
		$this->load->view('pemasukan/index');
		$this->load->view('templates/footer');
	}
}