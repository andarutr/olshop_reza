<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

public function total_barang()
{
	
	return $this->db->get('tb_barang')->num_rows();
}
public function total_kategori()
{
	
	return $this->db->get('tb_kategori')->num_rows();
}
public function total_pelanggan()
{
	
	return $this->db->get('tb_pelanggan')->num_rows();
}
public function total_transaksi()
{
	
	return $this->db->get('tbl_transaksi')->num_rows();
}
	//fungsi memanggil data pesanan berdasarkan id_pesanan
	public function detail_transaksi($id_transaksi)
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->where('id_transaksi', $id_transaksi);
		return $this->db->get()->row();
	}

	//fungsi memanggil detail barang per transaksi
	public function detail_barang($id_transaksi)
	{
		$this->db->select('*');
		$this->db->from('tbl_rinci_transaksi');
		$this->db->join('tbl_transaksi', 'tbl_transaksi.no_order = tbl_rinci_transaksi.no_order', 'left');
		$this->db->join('tb_barang', 'tb_barang.id_barang = tbl_rinci_transaksi.id_barang', 'left');
		$this->db->where('id_transaksi', $id_transaksi);
		return $this->db->get()->result();
	}
}

/* End of file M_auth.php */
