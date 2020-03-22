<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Data_model');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['judul'] = 'Halaman Home';
		$data['mahasiswa'] = $this->Data_model->getAllData();

		$this->load->view('templates/header', $data	);
		$this->load->view('Home/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah() {
		$data['judul'] = 'Tambah Mahasiswa';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		if( $this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data	);
			$this->load->view('Home/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Data_model->tambahData();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('/', 'refresh');
			
			// $this->load->view('templates/header', $data	);
			// $this->load->view('Home/index', $data);
			// $this->load->view('templates/footer');
		}
	}

	public function hapus($id) {
		$this->Data_model->hapusData($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('/', 'refresh');
	}

	public function ubah($id) {
		$data['judul'] = 'Ubah Mahasiswa';
		$data['mahasiswa'] = $this->Data_model->getDataById($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		if( $this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data	);
			$this->load->view('Home/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Data_model->ubahData();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('/', 'refresh');
			
			// $this->load->view('templates/header', $data	);
			// $this->load->view('Home/index', $data);
			// $this->load->view('templates/footer');
		}
	}
}
