<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies	
		$this->load->model('M_Rekening');
		}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Informasi',
			'rekening' => $this->M_Rekening->get_all_data(),
			'isi' => 'v_rekening',
		);
		
		$this->load->view('layout/v_wrapper_backend',$data,false);
	}
	// Add a new item
	public function add()
	{
		
		$data = array(
			'nama_bank'=>$this->input->post('nama_bank'),
			'no_rek' => $this->input->post('no_rek'),
			'atas_nama' => $this->input->post('atas_nama'),
		);
		$this->M_Rekening->add($data);
		if ($data) {
            // Berhasil menambahkan data
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan.');
        } else {
            // Gagal menambahkan data
            $this->session->set_flashdata('message', 'Gagal menambahkan data.');
        }redirect('rekening');
	}

	//Update one item
	public function edit($id_rekening=NULL )
	{
		$data = array(
			'id_rekening' => $id_rekening,
		'nama_bank'=>$this->input->post('nama_bank'),
			'no_rek' => $this->input->post('no_rek'),
			'atas_nama' => $this->input->post('atas_nama'),
		);
		$this->M_Rekening->edit($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('rekening');
	}

	//Delete one item
	public function delete($id_rekening = NULL )
	{
	$data = array('id_rekening' => $id_rekening);
	$this->M_Rekening->delete($data);
	$this->session->set_flashdata('pesan', 'Data Berhasil dihapus');
		redirect('rekening');
	}
}

/* End of file User.php */

