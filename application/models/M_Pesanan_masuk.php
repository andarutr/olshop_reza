<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanan_masuk extends CI_Model {

	public function pesanan(){
	$this->db->select('*');
	$this->db->from('tbl_transaksi');	
	$this->db->order_by('id_transaksi', 'desc');
	return $this->db->get()->result();
	
	}
public function update_data($data){
	$this->db->where('id_transaksi',$data['id_transaksi']);
	$this->db->update('tbl_transaksi',$data);
}
}

/* End of file ModelName.php */
