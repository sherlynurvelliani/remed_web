<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Amodel extends CI_Model {

	
	public function getAll()
	{
		
		return $this->db->get('tabel_a')->result();
	}

	public function store($object)
	{
		
		return $this->db->insert('tabel_a',$object);
	}
}

 ?>