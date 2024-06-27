<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->model('m_auth');
		$this->load->library('bcrypt');
	}

	public function register()
	{
		$data = array(
			'title' => 'Register Pelanggan',
			//'barang' => $this->m_home->get_all_data(),
			'isi' =>'v_register',
		);

		$this->load->view('layout/v_wrapper_frontend',$data,false);
	}

	public function register_backend()
	{
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'email' => $this->input->post('email'),
			'password' => $this->bcrypt->hash($this->input->post('password')),
			'foto' => 'foto.jpg'
		);

		$this->m_pelanggan->register($data);
		$this->session->set_flashdata('pesan', 'Register Berhasil');
		redirect('pelanggan/register');
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'email', 'required', array(
			'required' => 'Email harus diisi !!!'
		));
		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => 'Password harus diisi !!!'
		));
		
		if ($this->form_validation->run() ==  FALSE) {
			$data = array(
				'title' => 'Login pelanggan',
				//'kategori' => $this->m_kategori->get_all_data(),
				'isi' => 'v_login_pelanggan',
			);
			
			$this->load->view('layout/v_wrapper_frontend',$data,false);
		}else{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->pelanggan_login->login($email,$password);	
		} 
	}
	public function logout(){
		$this->pelanggan_login->logout();
	}

	public function akun (){
		$this->pelanggan_login->proteksi_halaman();
		$data = array(
			'title' => 'Akun',
			//'kategori' => $this->m_kategori->get_all_data(),
			'isi' => 'v_akun_saya',
		);
		
		$this->load->view('layout/v_wrapper_frontend',$data,false);
	
	}
}
