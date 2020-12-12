<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Amodel');
	}

	public function index()
	{
		$data['data_tabel'] = $this->Amodel->getAll();
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
			'kolom_kelas' => $this->input->post('kolom_kelas')
		);

		
		$this->Amodel->store($data);
		redirect('acontroller/index','refresh');
	}


}
