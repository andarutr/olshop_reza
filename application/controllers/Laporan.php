<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       $this->load->model('m_laporan');
    }


    public function index()
    { 
		$this->user_login->proteksi_halaman();
        $data = array(
            'title' => 'Laporan Penjualan',
            'isi' => 'v_laporan',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }
	
	public function lap_harian()
    {
       $tanggal = $this->input->post('tanggal');
       $bulan = $this->input->post('bulan');
       $tahun = $this->input->post('tahun');

	   $data = array(
		'title' => 'Laporan Harian',
		'tanggal' => $tanggal,
		'bulan' => $bulan,
		'tahun' => $tahun,
		'laporan' => $this->m_laporan->lap_harian($tanggal,$bulan,$tahun),
		'isi' => 'v_laporan_harian',
	);
	$this->load->view('layout/v_wrapper_backend', $data, FALSE);

	}
	
	public function lap_bulanan()
    {
       $bulan = $this->input->post('bulan');
       $tahun = $this->input->post('tahun');

	   $data = array(
		'title' => 'Laporan bulanan',
		'bulan' => $bulan,
		'tahun' => $tahun,
		'laporan' => $this->m_laporan->lap_bulanan($bulan,$tahun),
		'isi' => 'v_laporan_bulanan',
	);
	$this->load->view('layout/v_wrapper_backend', $data, FALSE);

	}
	
	public function lap_tahunan()
    {
       $bulan = $this->input->post('bulan');
       $tahun = $this->input->post('tahun');

	   $data = array(
		'title' => 'Laporan tahunan',
		'tahun' => $tahun,
		'laporan' => $this->m_laporan->lap_tahunan($tahun),
		'isi' => 'v_laporan_tahunan',
	);
	$this->load->view('layout/v_wrapper_backend', $data, FALSE);

	}
}


