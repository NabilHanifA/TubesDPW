<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pesanan extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            "SELECT
        `pesanan`.`id`,
        `customer`.`nama_customer`,
        `customer`.`email_customer`,
        `customer`.`nomor_telepon_customer`,
        `customer`.`alamat_customer`,
        `motor`.`nama_motor`,
        `jenis_motor`.`nama_jenis`,
        `jenis_service`.`nama_service`,
        `jenis_service`.`harga`,
        `status_pesanan`.`status_pesanan`
        FROM
        `pesanan`
        Inner Join `customer` ON `pesanan`.`customer_id` = `customer`.`id`
        Inner Join `jenis_service` ON `pesanan`.`jenis_service_id` = `jenis_service`.`id`
        Inner Join `motor` ON `pesanan`.`motor_id` = `motor`.`id`
        Inner Join `jenis_motor` ON `motor`.`jenis_id` = `jenis_motor`.`id`
        Inner Join `status_pesanan` ON `pesanan`.`status_id` = `status_pesanan`.`id`"
        )->result_array();
    }

    public function getstatus(){
        return $this->db->query("SELECT * FROM status_pesanan")->result_array();
    }

    public function insertPesanan($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function editPesanan()
	{
		$data = [
			'status_id' => ($this->input->post('status_pesanan')),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pesanan', $data);
	}
}
