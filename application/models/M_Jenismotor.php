<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jenismotor extends CI_Model
{
    public function getAll()
	{
		return $this -> db -> query ("SELECT * FROM jenis_motor")->result_array();
	}

   
}
