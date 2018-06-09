<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Siswa_model');
	}

	public function home(){
		$data['header'] = 'templates/header';
		$data['navbar'] = 'templates/navbar';
		$data['contents'] = 'home';
		$data['footer'] = 'templates/footer';
		$this->load->view('templates/index', $data);
	}

	public function index()
	{
		$data['header'] = 'templates/header';
		$data['navbar'] = 'templates/navbar';
		$data['contents'] = 'siswa_list';
		$data['footer'] = 'templates/footer';
		$data['siswa_data'] = $this->Siswa_model->get_siswa();
		$this->load->view('templates/index', $data);
	}

	public function create(){
		if (isset($_POST['submit'])) {
				$this->Siswa_model->insert_siswa();
				redirect('welcome/index');
		}

		$data['header'] = 'templates/header';
		$data['navbar'] = 'templates/navbar';
		$data['contents'] = 'siswa_tambah';
		$data['footer'] = 'templates/footer';
		$this->load->view('templates/index', $data);	

	}

	public function edit(){
		if (isset($_POST['submit'])) {
			$this->Siswa_model->edit_siswa();
			redirect('welcome/index');
		}

		$id = $this->uri->segment(3);
		$data['header'] = 'templates/header';
		$data['navbar'] = 'templates/navbar';
		$data['contents'] = 'siswa_edit';
		$data['footer'] = 'templates/footer';
		$data['siswa'] = $this->Siswa_model->getById($id);
		$this->load->view('templates/index', $data);
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->Siswa_model->hapus_siswa($id);
		redirect('welcome','refresh');
		
	}


}
