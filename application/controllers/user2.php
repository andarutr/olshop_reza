<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('m_user');

	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data = array(
			'title' => 'User',
			'user' => $this->m_user->get_all_data(),
			'isi' => 'v_user',
		);
		
		$this->load->view('layout/v_wrapper_backend',$data,false);
	}
	

	// Add a new item
	public function add()
	{
		$data = array(
			'title' => 'Tambah Data User',
			'user' => $this->m_user->get_all_data(),
			'isi' => 'v_tambah_user',
		);
		
		$this->load->view('layout/v_wrapper_backend',$data,false);
	}
	public function simpan(){
		$data = array(
			'nama_user' => $this->input->post('nama_user'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_user' =>$this->input->post('level_user'),);
		$this->m_user->add($data);
		$this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
		redirect('user');
		

	}
	public function edit_user($id_user){
		$data = array(
			'title' => 'Edit Data User',
			'user' => $this->m_user->edit_user($id_user),
			'isi' => 'v_edit_user',
		);
		
		$this->load->view('layout/v_wrapper_backend',$data,false);
	}
	//Update one item
	public function update($id_user = null) 
	{	
		$data = array(
			'id_user' => $id_user,
			'nama_user' => $this->input->post('nama_user'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_user' =>$this->input->post('level_user'),
		);
		 $this->m_user->update($data);
			$this->session->set_flashdata('info','Data Konsumen berhasil diupdate');
			redirect('user');
		//memasukan apa yang ditampung di array $data ke tabek konsumen(database)//
		
	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Controusllername.php */

