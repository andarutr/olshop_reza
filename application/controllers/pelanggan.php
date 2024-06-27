<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->model('m_auth');
		
	}

	public function register()
	{
 $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'required', array(
		'required' => '%s harus siisi !!!'
	));
	$this->form_validation->set_rules('email', 'email', 'required|is_unique[tb_pelanggan.email]', array(
   'required' => '%s harus siisi !!!',
   'is_unique' => '%s Sudah Terdaftar..'
));
$this->form_validation->set_rules('password', 'password', 'required', array(
'required' => '%s harus siisi !!!'
));
$this->form_validation->set_rules('ulangi_password', 'ulangi_password', 'required|matches[password]', array(
'required' => '%s harus siisi !!!',
'matches' => '%s Password tidak sama..'
));

if ($this->form_validation->run() == FALSE) {
	$data = array(
		'title' => 'Register Pelanggan',
		//'barang' => $this->m_home->get_all_data(),
		'isi' =>'v_register',
	);
$this->load->view('layout/v_wrapper_frontend',$data,false);
} else {
	$data = array(
		'nama_pelanggan' => $this->input->post('nama_pelanggan'),
		'email' => $this->input->post('email'),
		'password' => $this->input->post('password'),
	);
	$this->m_pelanggan->register($data);
	$this->session->set_flashdata('pesan', 'Register Berhasil');
	redirect('pelanggan/register');
}		
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'email', 'required', array(
			'required' => '%s harus siisi !!!'
		));
		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => '%s harus diisi !!!'
		));
		
		if ($this->form_validation->run() ==  TRUE) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->pelanggan_login->login($email,$password);
			
		} 
			$data = array(
				'title' => 'Login pelanggan',
				//'kategori' => $this->m_kategori->get_all_data(),
				'isi' => 'v_login_pelanggan',
			);
			
			$this->load->view('layout/v_wrapper_frontend',$data,false);
		
	}
	public function logout(){
		$this->pelanggan_login->logout();
		}

	public function akun (){

		//ptoteksi halaman
		$this->pelanggan_login->proteksi_halaman();
		$data = array(
			'title' => 'Akun',
			//'kategori' => $this->m_kategori->get_all_data(),
			'isi' => 'v_akun_saya',
		);
		
		$this->load->view('layout/v_wrapper_frontend',$data,false);
	
	}
}
