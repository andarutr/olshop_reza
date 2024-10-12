<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

	public function get_all_data(){
		$this->db->select('*');
		$this->db->from('tb_pelanggan');
		$this->db->order_by('id_pelanggan','desc');
		return $this->db->get()->result();
	}
	public function detail_pelanggan($id_pelanggan)
	{
		$this->db->select('*');
		$this->db->from('tb_pelanggan');
		$this->db->where('tb_pelanggan', $id_pelanggan);
		return $this->db->get()->row();
	}
	public function register($data){
		
		$this->db->insert('tb_pelanggan', $data);
		
	}

}

/* End of file ModelName.php */
