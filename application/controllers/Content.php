<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Contents');
	}

	public function logo($error = '')
	{
		$this->load->view('templates/header', ['title' => 'Logo setting']);
		$this->load->view('content/logo/index', ['error' => $error]);
		$this->load->view('templates/footer');
	}

	public function logo_store()
	{
		$file = $this->input->post('file');
		$user = $this->User->logged_in();
		$old = $this->Content->where('slug', 'logo')->single();

		$config['upload_path']   = './assets/site/logo/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size']      = 1024;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('file'))
    {
    	$this->logo($this->upload->display_errors());
    } else {
    	$file_name = $this->upload->data('file_name');
    	$this->Contents->where('slug', 'logo')->update([
    		'title'       => 'logo',
    		'description' => 'Logo site',
    		'file'        => $file_name,
    		'author'      => $user['id']
    	]);
    	$this->session->set_flashdata('message', '<div class="alert alert-success">Logo berhasil diubah!</div>');
    	redirect($this->agent->referrer());
    }
	}
}