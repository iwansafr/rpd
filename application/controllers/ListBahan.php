<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ListBahan extends CI_Controller {
	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_id')) {
			show_404();
		}

		$this->load->library('form_validation');
	}

	public function edit($id) {
		$list = $this->db->get_where('list_kegiatan', ['id' => $id])->row_array();

		if ($list) {
			$this->load->view('templates/header', ['title' => 'Edit '.$list['title']]);
			$this->load->view('list/edit', ['list' => $list]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function destroy($id) {
		$list = $this->db->get_where('list_kegiatan', ['id' => $id])->row_array();

		if ($list) {
			$this->db->delete('list_kegiatan', ['id' => $id]);
			$this->session->set_flashdata('message', '<div class="alert alert-success">List bahan berhasil dihapus!. <a style="text-decoration: underline;color: blue;" href="'.base_url().'">Kembali</a></div>');

			$referrer = $this->agent->referrer();
			redirect($referrer);
		} else {
			show_404();
		}
	}

	public function update($id) {
		$list = $this->db->get_where('list_kegiatan', ['id' => $id])->row_array();

		if ($list) {
			$this->form_validation->set_rules('title', '<strong>Nama bahan</strong>', 'required');
			$this->form_validation->set_rules('volume', '<strong>Volume</strong>', 'required');
			$this->form_validation->set_rules('satuan', '<strong>Satuan</strong>', 'required');
			$this->form_validation->set_rules('harga_satuan', '<strong>Harga satuan</strong>', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->edit($id);
			} else {
				$this->db->where('id', $id);
				$this->db->update('list_kegiatan', [
					'title' => htmlspecialchars($this->input->post('title')),
					'volume' => htmlspecialchars($this->input->post('volume')),
					'satuan' => htmlspecialchars($this->input->post('satuan')),
					'harga_satuan' => htmlspecialchars($this->input->post('harga_satuan')),
					'jumlah_biaya' => $this->input->post('volume') * $this->input->post('harga_satuan')
				]);

				// response action
				$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diubah!</div>');
				redirect($this->agent->referrer());
			}
		} else {
			show_404();
		}
	}

	public function create() {
		$data = $this->db->get('jenis_kegiatan')->result_array();
		if (count($data) < 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf anda belum mengisi jenis kegiatan!</div>');
			redirect();
			die;
		}

		$this->db->order_by('id', 'desc');
		$jenis_kegiatan = $this->db->get('jenis_kegiatan')->result_array();
		$this->load->view('templates/header', ['title' => 'List detail kegiatan']);
		$this->load->view('kegiatan/add_list', ['jenis_kegiatan' => $jenis_kegiatan]);
		$this->load->view('templates/footer');
	}

	public function store() {
		$this->form_validation->set_rules('title', '<strong>title</strong>', 'required');
		$this->form_validation->set_rules('volume', '<strong>volume</strong>', 'required');
		$this->form_validation->set_rules('satuan', '<strong>satuan</strong>', 'required');
		$this->form_validation->set_rules('harga_satuan', '<strong>jumlah_satuan</strong>', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->create_list_kegiatan();
		} else {
			$this->db->insert('list_kegiatan', [
				'title'              => htmlspecialchars($this->input->post('title')),
				'jenis_kegiatan_id'  => $this->input->post('jenis_kegiatan_id'),
				'detail_kegiatan_id' => 0,
				'volume'             => htmlspecialchars($this->input->post('volume')),
				'satuan'             => htmlspecialchars($this->input->post('satuan')),
				'harga_satuan'       => htmlspecialchars($this->input->post('harga_satuan')),
				'jumlah_biaya'       => $this->input->post('volume') * $this->input->post('harga_satuan')
			]);

			$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil disimpan!. Jika ingin menambah list bahan tinggal tambah dengan menyesuaikan judul dan detail judul.</div>');
			redirect($this->agent->referrer());
		}
	}
}