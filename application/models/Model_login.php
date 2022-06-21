<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	public function cek($username,$password)
	{

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('tbl_master_user');

	}

	public function cek_admin($username,$password)
	{

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->where('level_user','admin');
		return $this->db->get('tbl_master_user');
	}
	

	public function cek_kandidat($username,$password)
	{

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->where('level_user','kandidat');
		return $this->db->get('tbl_master_user');
	}
	
	public function status_login($id_user)
	{
		$hasil = $this->db->query("UPDATE tbl_master_user SET login_status ='0' WHERE id_user='$id_user'");
		return $hasil;
	}




}
