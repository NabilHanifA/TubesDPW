<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jenismotor extends CI_Model
{
    public function getAll()
	{
		return $this -> db -> query ("SELECT * FROM jenis_motor ORDER BY id")->result_array();
	}
	public function deleteJenis($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('jenis_motor');
	}

	public function insertJenis($data)
	{
		$this->db->insert('jenis_motor', $data);
	}


	public function getJenis($id)
	{
		return  $this->db->get_where('jenis_motor', ['id' => $id])->result_array();
	}

	public function editJenis()
	{
		$data = [
			"nama_jenis" => $this->input->post('nama_jenis'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('jenis_motor', $data);
	}
   
}
