<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login_user()
	{
			$this->form_validation->set_rules('username', 'Username', 'required', array(
				'required' => 'Username harus siisi !!!'
			));

			$this->form_validation->set_rules('password', 'Password', 'required', array(
				'required' => 'Password harus siisi !!!'
			));
			
			if ($this->form_validation->run() ==  FALSE) {
				$data = array(
					'title' => 'Login User',
				);
				
				$this->load->view('v_login_user', $data);
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$this->user_login->login($username,$password);
			} 
	}

	public function logout_user()
	{
	$this->user_login->logout();
	}
}

/* End of file Auth.php */
