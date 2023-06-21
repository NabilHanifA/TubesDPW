<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jenisservice extends CI_Model
{
	public function getAll()
	{
		return $this->db->query("SELECT * FROM jenis_service")->result_array();
	}

	public function deleteService($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('jenis_service');
	}

	public function insertService($data)
	{
		$this->db->insert('jenis_service', $data);
	}


	public function getService($id)
	{
		return  $this->db->get_where('jenis_service', ['id' => $id])->result_array();
	}

	public function editService()
	{
		$data = [
			"nama_service" => $this->input->post('nama_service'),
			"harga" => $this->input->post('harga')
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('jenis_service', $data);
	}
}
