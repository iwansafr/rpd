<?php

class Goods extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Goods_model', 'goods');
	}

	public function index()
	{
		$data = $this->goods->order_by('id', 'desc')->get()->result();
		$this->load->view('templates/header', ['title' => 'Data barang']);
		$this->load->view('goods/index', ['data' => $data]);
		$this->load->view('templates/footer');
	}
}