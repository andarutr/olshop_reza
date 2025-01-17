<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	public function login_user($username , $password)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username', $username);
		$query = $this->db->get();
		$user = $query->row();

		if ($user) {
			if (password_verify($password, $user->password)) {
				return $user;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function login_pelanggan($email , $password)
	{
		$this->db->select('*');
		$this->db->from('tb_pelanggan');
		$this->db->where('email', $email);
		$query = $this->db->get();
		$user = $query->row();

		if ($user) {
			if (password_verify($password, $user->password)) {
				return $user;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}

/* End of file M_auth.php */