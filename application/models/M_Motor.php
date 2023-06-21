<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Motor extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
        "SELECT `jenis_motor`.`nama_jenis`, `motor`.`nama_motor`
        FROM `motor`
        Join `jenis_motor` ON `motor`.`jenis_id` = `jenis_motor`.`id`")->result_array();
    }
}
