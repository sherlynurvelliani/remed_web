<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CModel');
	}

	public function index()
	{
		$data['data_tabel'] = $this->CModel->getAll();
		$this->load->view('mahasiswa_index', $data);
	}
		
	 public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

	public function simpan_data()
	{
		$data = array(
			'id_024' => $this->input->post('id_024'),
			'kolom_jurusan' => $this->input->post('kolom_jurusan'),
			'kolom_kelas' => $this->input->post('kolom_kelas'),
			'kolom_isi' => $this->input->post('kolom_isi'),
		);

		
		$this->CModel->store($data);
		redirect('CController/index','refresh');
	}


}
