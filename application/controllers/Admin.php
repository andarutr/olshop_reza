<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {

		parent:: __construct();
		$this->load->model('m_admin');
		$this->load->model('m_pesanan_masuk');
	}

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'total_barang'=> $this->m_admin->total_barang(),
			'total_kategori'=> $this->m_admin->total_kategori(),
			'isi' => 'v_Admin',

		);
		$this->load->view('layout/v_wrapper_backend',$data,FALSE);
	}
	public function pesanan_masuk()
	{
		$data = array(
			'title' => 'Pesanan Masuk',
			'pesanan' => $this->m_pesanan_masuk->pesanan(),
			/*'pesanan_diproses' => $this->m_pesanan_masuk->pesanan_diproses(),
			'pesanan_dikirim' => $this->m_pesanan_masuk->pesanan_dikirim(),
			'pesanan_selesai' => $this->m_pesanan_masuk->pesanan_selesai(),
			'detail_masuk' => $this->m_pesanan_masuk->detail_masuk(), */
			'isi' => 'v_pesanan_masuk',
		); 
		$this->load->view('layout/v_wrapper_backend', $data, FALSE);
	}
	public function proses($id_transaksi){
		$data = array(
			'id_transaksi' =>$id_transaksi,
			'status_order'=> '1'
		);
		$this->m_pesanan_masuk->update_data($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil diproses');
		redirect('admin/pesanan_masuk');
		
	}
}

/* End of file Controllername.php */
