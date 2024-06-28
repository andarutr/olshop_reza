<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	$this->load->model('m_transaksi');
	}

	public function index()
	{
		if (empty($this->cart->contents())) {
			redirect('home');
		}
			$data = array(
				'title' => 'Keranjang Belanja',
				//'barang' => $this->m_home->get_all_data(),
				'isi' =>'v_belanja',
			);
		$this->load->view('layout/v_wrapper_frontend',$data,false);
	}

public function add(){
	$redirect_page = $this->input->post('redirect_page');
	$data = array(
        'id'      => $this->input->post('id'),
        'qty'     => $this->input->post('qty'),
        'price'   => $this->input->post('price'),
        'name'    => $this->input->post('name'),
);
$this->cart->insert($data);
redirect($redirect_page, 'refresh');
}

public function delete($rowid)
{
$this->cart->remove($rowid);
redirect('belanja');
}

public function update()
{
	$i = 1;
	foreach ($this->cart->contents() as $items) {
		$data = array(
			'rowid' => $items['rowid'],
			'qty'  => $this->input->post($i . '[qty]'),
		);
		$this->cart->update($data);
		$i++;
	}
	$this->session->set_flashdata('Pesan', 'Berhasil DiUpdate');
	redirect('belanja');
}
	public function clear()
	{
		$this->cart->destroy($rowid);
		redirect('belanja');
	}

	public function checkout()
	{
		$this->pelanggan_login->proteksi_halaman();
		
		$data = array(
			'title' => 'Cek Out Belanja',
			'isi' => 'v_checkout',
		);

		$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
	}

	public function checkout_backend(){
		$data = array(
			'id_pelanggan' =>$this->session->userdata('id_pelanggan'),
			'no_order' => $this->input->post('no_order'),
			'tgl_order' => date('Y-m-d'),
			'nama_penerima' => $this->input->post('nama_penerima'),
			'hp_penerima' => $this->input->post('hp_penerima'),
			'kota' => $this->input->post('kota'),
			'alamat' => $this->input->post('alamat'),
			'expedisi' => $this->input->post('expedisi'),
			'ongkir' => $this->input->post('ongkir'),
			'berat' => $this->input->post('berat'),
			'grand_total' => $this->input->post('grand_total'),
			'total_bayar' => $this->input->post('total_bayar'),
			'status_bayar' => '0',
			'status_order' => '0',
		);

		$this->m_transaksi->simpan_transaksi($data);$i = 1;
		// foreach ($this->cart->contents() as $item) {
		// 	$data_rinci = array(
		// 		'no_order' => $this->input->post('no_order'),
		// 		'id_barang' => $item['id'],
		// 		'qty' => $this->input->post('qty' . $i++),
		// 		'nama_barang' => $item['name'],
		// 	);
		// 	$this->m_transaksi->simpan_rinci_transaksi($data_rinci);
		// }

	 	$qtyArray = $this->input->post('qty');
	    $i = 0;
	    foreach ($this->cart->contents() as $item) {
	        $data_rinci = array(
	            'no_order' => $data['no_order'],
	            'id_barang' => $item['id'],
	            'qty' => $qtyArray[$i], // Ambil nilai qty sesuai dengan index $i
	            'nama_barang' => $item['name'],
	        );
	        $this->m_transaksi->simpan_rinci_transaksi($data_rinci);
	        $i++;
	    }

		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Proses !!!');
		$this->cart->destroy();
		redirect('pesanan_saya');
	}

}
