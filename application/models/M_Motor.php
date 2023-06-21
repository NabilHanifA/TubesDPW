<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Motor extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
        "SELECT `motor`.`id`, `motor`.`jenis_id`, `jenis_motor`.`nama_jenis`, `motor`.`nama_motor`
        FROM `motor`
        Join `jenis_motor` ON `motor`.`jenis_id` = `jenis_motor`.`id`
        ORDER BY
        `motor`.`id` ASC")->result_array();
    }

    public function insertMotor($data)
    {
        $this->db->insert('motor', $data);
    }

    public function deleteMotor($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('motor');
	}

    public function getMotor($id)
	{
		return  $this->db->get_where('motor', ['id' => $id])->result_array();
	}

	public function editMotor()
	{
		$data = [
			"jenis_id" => ($this->input->post('nama_jenis')),
			"nama_motor" => ($this->input->post('nama_motor'))
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('motor', $data);
	}
}
