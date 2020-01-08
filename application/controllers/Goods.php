<?php

class Goods extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Goods_model', 'goods');
	}

	public function code() {
		$last = $this->goods->order_by('id', 'desc')->limit(1)->get()->row();
		$count = strlen($last['id'])+1;
		$id = $last['id'];
		$kode = '';
		if ($count == 1) {
			$kode = 'P000'.($id+1);
		} else if ($count == 2) {
			$kode = 'P00'.($id+1);
		} else if ($count == 3) {
			$kode = 'P0'.($id+1);
		} else if ($count > 3) {
			$kode = 'P'.($id+1);
		}
		return $kode;
	}

	public function index()
	{
		$data = $this->goods->order_by('id', 'desc')->get()->result();
		$jumlah = 0;
		foreach($data as $key) {
			$jumlah += $key['price'];
		}
		$this->load->view('templates/header', ['title' => 'Data barang']);
		$this->load->view('goods/index', ['data' => $data, 'jumlah' => $jumlah, 'kode' => $this->code()]);
		$this->load->view('templates/footer');
	}

	public function store()
	{
		$kode = $this->code();
		$name = htmlspecialchars($this->input->post('name'));
		$date = date('Y-m-d H:i:s', strtotime($this->input->post('date')));
		$price = $this->input->post('price');
		$selling_price = $this->input->post('selling_price');
		$status = $this->input->post('status');

		$this->goods->insert([
			'kode' => $kode,
			'name' => $name,
			'date' => $date,
			'price' => $price,
			'selling_price' => $selling_price,
			'status' => $status
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">1 data berhasil ditambahkan!</div>');
		redirect($this->agent->referrer());
	}

	public function search()
	{
		$q = $this->input->get('q');
		$data = $this->goods->like('name', $q)->get()->result();
		$jumlah = 0;
		foreach($data as $key) {
			$jumlah += $key['price'];
		}
		$this->load->view('templates/header', ['title' => 'Data barang']);
		$this->load->view('goods/index', ['data' => $data, 'jumlah' => $jumlah, 'kode' => $this->code()]);
		$this->load->view('templates/footer');
	}

	public function destroy($id)
	{
		$data = $this->goods->find($id);
		if ($data)
		{
			$this->goods->delete($id);$this->session->set_flashdata('message', '<div class="alert alert-success">1 data berhasil dihapus!</div>');
			redirect($this->agent->referrer());

		} else {
			show_404();
		}
	}

	public function edit($id)
	{
		$data = $this->goods->find($id);
		if ($data)
		{
			$this->load->view('templates/header', ['title' => 'Data barang']);
			$this->load->view('goods/edit', ['data' => $data, 'kode' => $this->code()]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function update($id)
	{
		$kode = $this->code();
		$name = htmlspecialchars($this->input->post('name'));
		$date = date('Y-m-d H:i:s', strtotime($this->input->post('date')));
		$price = $this->input->post('price');
		$selling_price = $this->input->post('selling_price');
		$status = $this->input->post('status');

		$this->goods->where('id', $id)->update([
			'kode' => $kode,
			'name' => $name,
			'date' => $date,
			'price' => $price,
			'selling_price' => $selling_price,
			'status' => $status
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">1 data berhasil diedit!</div>');
		redirect('goods');
	}
}