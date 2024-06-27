<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengiriman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies	
		$this->load->model('m_pengiriman');
		}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'pengiriman',
			'pengiriman' => $this->m_pengiriman->get_all_data(),
			'isi' => 'v_checkout',
		);
		
		$this->load->view('layout/v_wrapper_backend',$data,false);
	}
}
