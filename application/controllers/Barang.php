<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_barang');
		$this->load->model('m_kategori');
		$this->load->library('upload');

	}

	// List all your items
	public function index()
	{
		$this->user_login->proteksi_halaman();
						
		$data = array(
			'title' => 'Produk',
			'barang' => $this->m_barang->get_all_data(),
			'isi' => 'barang/v_barang',
		);
		$this->load->view('layout/v_wrapper_backend',$data,FALSE);
	}
	
	// Add a new item
	public function add()
	{
		
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required',array(
			'required'=>'%s Harus Diisi'));

		$this->form_validation->set_rules('id_kategori', 'nama_kategori', 'required',array(
				'required'=>'%s Harus Diisi'));

		$this->form_validation->set_rules('harga', 'harga', 'required',array(
					'required'=>'%s Harus Diisi'));
		$this->form_validation->set_rules('berat', 'berat', 'required',array(
						'required'=>'%s Harus Diisi'));
					
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required',array(

						'required'=>'%s Harus Diisi'));	
		if ($this->form_validation->run() == TRUE) {	
		$config['upload_path'] = './assets/gambar/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']     = '2000';
		

		$this->upload->initialize($config);
		$field_name = "gambar";
			if(!$this->upload->do_upload($field_name)){
				$data = array(
					'title' => 'Add Produk',
					'kategori' => $this->m_kategori->get_all_data(),
					'eror_upload'=>$this->upload->display_errors(),
					'isi' => 'barang/v_add',
				);
			}else{		
				$upload_data = array('uploads' =>$this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar/' .$upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'nama_barang'=>$this->input->post('nama_barang'),
					'id_kategori' =>$this->input->post('id_kategori'),
					'harga' =>$this->input->post('harga'),
					'berat' =>$this->input->post('berat'),
					'deskripsi' =>$this->input->post('deskripsi'),
					'gambar' =>$upload_data['uploads']['file_name'],
				);
				$this->m_barang->add($data);
				$this->session->set_flashdata('Pesan', 'Berhail ditambahkan');

				if ($data) {
					// Berhasil menambahkan data
					$this->session->set_flashdata('message', 'Data berhasil ditambahkan.');
				} else {
					// Gagal menambahkan data
					$this->session->set_flashdata('message', 'Gagal menambahkan data.');
				}
				redirect('barang');
				
			}
		} 

		$data = array(
			'title' => 'Add Produk',
			'kategori' => $this->m_kategori->get_all_data(),
			'isi' => 'barang/v_add',
		);
		$this->load->view('layout/v_wrapper_backend',$data,FALSE);
	}
	//Update one item
	public function edit( $id_barang = NULL )
	{
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required',array(
			'required'=>'%s Harus Diisi'));

		$this->form_validation->set_rules('id_kategori', 'nama_kategori', 'required',array(
				'required'=>'%s Harus Diisi'));

		$this->form_validation->set_rules('harga', 'harga', 'required',array(
					'required'=>'%s Harus Diisi'));
		$this->form_validation->set_rules('berat', 'berat', 'required',array(
						'required'=>'%s Harus Diisi'));
		
					
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required',array(

						'required'=>'%s Harus Diisi'));	
		if ($this->form_validation->run() == TRUE) {	
		$config['upload_path'] = './assets/gambar/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']     = '2000';
		

		$this->upload->initialize($config);
		$field_name = "gambar";
			if(!$this->upload->do_upload($field_name)){
				$data = array(
					'title' => 'Edit Produk',
					'kategori' => $this->m_kategori->get_all_data(),
					'barang' =>$this->m_barang->get_data($id_barang),
					'eror_upload'=>$this->upload->display_errors(),
					'isi' => 'barang/v_edit',
				);
				$this->load->view('layout/v_wrapper_backend',$data,FALSE);
			}else{	
				$barang = $this->m_barang->get_data($id_barang);
				if($barang->gambar != ""){
					unlink('./assets/gambar/' .$barang->gambar);
	}	
				$upload_data = array('uploads' =>$this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar/' .$upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_barang' => $id_barang,
					'nama_barang'=>$this->input->post('nama_barang'),
					'id_kategori' =>$this->input->post('id_kategori'),
					'harga' =>$this->input->post('harga'),
					'berat' =>$this->input->post('berat'),
					'deskripsi' =>$this->input->post('deskripsi'),
					'gambar' =>$upload_data['uploads']['file_name'],
				);
				$this->m_barang->edit($data);
				$this->session->set_flashdata('Pesan', 'Berhail ditambahkan');
				redirect('barang');
				
			}
			//tanpa ganti gambar
			$data = array(
				'id_barang' => $id_barang,
				'nama_barang'=>$this->input->post('nama_barang'),
				'id_kategori' =>$this->input->post('id_kategori'),
				'harga' =>$this->input->post('harga'),
				'berat' =>$this->input->post('berat'),
				'deskripsi' =>$this->input->post('deskripsi'),
			);
			$this->m_barang->edit($data);
			$this->session->set_flashdata('Pesan', 'Berhail ditambahkan');
			redirect('barang');
		}

		$data = array(
			'title' => 'Edit Produk',
			'kategori' => $this->m_kategori->get_all_data(),
			'barang' =>$this->m_barang->get_data($id_barang),
			'isi' => 'barang/v_edit',
		);
		$this->load->view('layout/v_wrapper_backend',$data,FALSE);


	}

	//Delete one item
	public function delete( $id_barang = NULL )
	{
	//delete gambar
	$barang = $this->m_barang->get_data($id_barang);
	if($barang->gambar != ""){
		unlink('./assets/gambar/' .$barang->gambar);
	}

	//end delete gambar
	$data = array('id_barang' => $id_barang);
	$this->m_barang->delete($data);
	$this->session->set_flashdata('pesan', 'Data Berhasil dihapus');
		redirect('barang');
	}
}

/* End of file Controllername.php */

