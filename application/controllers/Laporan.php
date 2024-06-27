<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('m_laporan');
    }


    public function index()
    {
        $data = array(
            'title' => 'Laporan Penjualan',
            'isi' => 'v_laporan',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }
}
