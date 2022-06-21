<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller {

function __construct()
	{
		parent::__construct();
		
		date_default_timezone_set('Asia/Jakarta');	
	}
	public function login()
	{
		if ($this->session->login==TRUE) {
			redirect('kandidat/dashboard');
		}

		$data['landing']=$this->data_landing();
		$this->load->view('landing/header_landing',$data);
		$this->load->view('kandidat/login');
		$this->load->view('landing/footer_landing');
	}

	public function dashboard()
	{

		$data['landing']=$this->data_landing();
		$this->load->view('landing/header_landing',$data);
		$this->load->view('kandidat/login');
		$this->load->view('landing/footer_landing');
	}


	public function data_landing()
	{
		$data['profil'] =$this->db->get('tbl_master_aplikasi')->result();
		return $data;
	}

	public function ceklogin()
	{
		$username =$this->input->post('username');
		$password =md5($this->input->post('password'));

		$cek = $this->model_login->cek_kandidat($username,$password)->result();

		if ($cek !=NULL) {
			foreach ($cek as $a)
			{
				if ($a->status_user==1) {
					$data['id_user'] = $a->id_user;
					$data['username'] = $a->username;
					$data['email_user'] = $a->email_user;
					$data['nama_user'] = $a->nama_user;
					$data['level_user'] = $a->level_user;
					$data['photo_user'] = $a->photo_user;
					$data['telepon'] = $a->telepon_user; 
					$data['login'] = TRUE;
					$this->session->set_userdata($data);
					$data = array(
						'login_status' 				=> "1",
					);
					$this->db->where('id_user', $a->id_user);
					$this->db->update('tbl_master_user', $data);
					redirect('dashboard/kandidat','refresh');
				}else{
					$data['title'] = 'Login Gagal';
					$data['text'] = 'User dinonaktifkan!';
					$data['icon'] = 'error';
					$this->session->set_flashdata($data); 
					redirect('kandidat/login','refresh');
				}
			}
		}
		else{
			$data['title'] = 'Login Gagal';
			$data['text'] = 'Silahkan Periksa username & Password!';
			$data['icon'] = 'error';
			$this->session->set_flashdata($data); 
			redirect('kandidat/login','refresh');
		}
	}

}
