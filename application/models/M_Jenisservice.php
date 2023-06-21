<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jenisservice extends CI_Model
{
    public function getAll()
	{
		return $this -> db -> query ("SELECT * FROM jenis_service")->result_array();
	}

   
}
