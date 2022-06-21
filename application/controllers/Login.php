<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');	
	}
	public function index()
	{
		if ($this->session->userdata('login')==TRUE) {
			redirect('dashboard','refresh');
		}else{
			$this->load->view('login/tampilan_login');
		}
	}

	public function reset_password()

	{
		$tanggal_lahir = $this->input->post('tanggal_lahir_warga');
		$this->db->where('nik', $this->input->post('nik_warga'));
		$data_warga = $this->db->get('tbl_warga');
		if ($data_warga->num_rows() > 0) {
			foreach ($data_warga->result() as $key) {
				$tgl_lahir = $key->tanggal_lahir;
				if ($tanggal_lahir != $tgl_lahir) {
					$data['title'] = 'Gagal';
					$data['text'] = 'Tanggal Lahir Tidak Sesuai!';
					$data['icon'] = 'error';
					$this->session->set_flashdata($data);
					redirect('login');
				}
				else{
					$tgl = explode('-', $tgl_lahir);

					$password_baru = $tgl[2].$tgl[1].$tgl[0];
					$data_password = 
					array('password' => md5($password_baru), );
					$this->db->set($data_password);
					$this->db->where('nik',$this->input->post('nik_warga'));
					$result = $this->db->update('tbl_warga');
					$data['title'] = 'Reset Password Berhasil';
					$data['text'] = 'NIK : '.$this->input->post('nik_warga').'<br> Password Baru : '.$password_baru;
					$data['icon'] = 'success';
					$this->session->set_flashdata($data);
					redirect('login');
				}
			}
			
		}else{

			$data['title'] = 'Gagal';
			$data['text'] = 'NIK Tidak Terdaftar!';

			$data['icon'] = 'error';

			$this->session->set_flashdata($data);
			redirect('login');
		}
	}

	public function ceklogin()
	{
		$username =$this->input->post('username');
		$password =md5($this->input->post('password'));
		$cek = $this->model_login->cek_admin($username,$password)->result();
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
					redirect('dashboard','refresh');

				}else{
					$data['title'] = 'Login Gagal';
					$data['text'] = 'Username Belum Diaktivasi!';
					$data['icon'] = 'error';
					$this->session->set_flashdata($data);
					redirect('login');
				}

			}

		}
		else{
			$data['title'] = 'Login Gagal';
			$data['text'] = 'Silahkan Periksa Username dan Password!';
			$data['icon'] = 'error';
			$this->session->set_flashdata($data);
			redirect('login');
		}
	}
	public function logout()
	{
		$id_user = $this->session->id_user;

		$this->model_login->status_login($id_user);

		$this->session->sess_destroy();

		redirect('login');
	}



}
