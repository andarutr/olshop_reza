<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		
	}

	public function index()
	{
		// $data = array(
		// 	'title' => 'Home',
		// 	'barang' => $this->m_home->get_all_data(),
		// 	'isi' =>'v_home',
		// );
		// $this->load->view('layout/v_wrapper_frontend',$data,false);
		$data['title'] = 'Selamat Datang Pelanggan';
		$data['barang'] = $this->m_home->get_all_data();

		$this->load->view('layout/master_header', $data);
		$this->load->view('pages/v_home', $data);
		$this->load->view('layout/master_footer');
	}

	public function search(){
		$keyword = $this->input->post('search_input');

        $data = array(
			'title' => 'Home',
			'barang' => $this->m_home->search_data($keyword),
				// 'isi' =>'v_home_search',
			'keyword' => $keyword
		);

		// $this->load->view('layout/v_wrapper_frontend',$data,false);
		$this->load->view('layout/master_header', $data);
		$this->load->view('pages/v_search', $data);
		$this->load->view('layout/master_footer');
	}

	public function kategori($id_kategori)
	{	
		$kategori = $this->m_home->kategori($id_kategori);
		$data = array(
			'title' => 'Kategori Barang : '. $kategori->nama_kategori, 
			'kategori' => $kategori->nama_kategori, 
			'barang' => $this->m_home->get_all_data_barang($id_kategori),
			 'isi' =>'pages/v_kategori',
		);

		 $this->load->view('layout/v_wrapper_frontend',$data,false);
	//	$this->load->view('layout/master_header', $data);
	////	$this->load->view('pages/v_kategori', $data);
		//$this->load->view('layout/master_footer');
	}
	public function detail_barang($id_barang)
	{
		$data = array(
			'title' => 'Detail Barang  ',
			'gambar' => $this->m_home->gambar_barang($id_barang),
			'barang' => $this->m_home->detail_barang($id_barang),
			 'isi' =>'pages/v_detail_barang',
		);
		 $this->load->view('layout/v_wrapper_frontend',$data,false);

	//	$this->load->view('layout/master_header', $data);
	//	$this->load->view('pages/v_detail_barang', $data);
	//	$this->load->view('layout/master_footer');
	}

	public function sendmail($to, $subject, $message) {
        $headers = 'From: naufalarezaa12@example.com' . "\r\n" .
                   'Reply-To: '.$to. "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        $message = wordwrap($message, 70);

        if (mail($to, $subject, $message, $headers)) {
            echo "Email berhasil dikirim.";
        } else {
            echo "Gagal mengirim email.";
        }
    }
	public function sendTo() {
        $to = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('pesan');
        
        $this->sendmail($to, $subject, $message);
    }
}


/* End of file Controllername.php */
