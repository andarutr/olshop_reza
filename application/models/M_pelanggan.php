<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

	public function register($data){
		
		$this->db->insert('tb_pelanggan', $data);
		
	}

}

/* End of file ModelName.php */
