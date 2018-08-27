<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('isLogged')) {
			redirect('app/dashboard','refresh');
		}
	}

	public function index(){
		$this->load->view('Login/login');
	}

	public function cek_login() {
		$data = array('user' => $this->input->post('user', TRUE),
						'pass' => $this->input->post('pass', TRUE)
			);
		$this->load->model('modeldata'); // load ModelPatk
		$hasil = $this->modeldata->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Login';
				$sess_data['id'] = $sess->id;
				$sess_data['user'] = $sess->user;
				$sess_data['lvl'] = $sess->lvl;
				$sess_data['isLogged'] = true;
				$this->session->set_userdata($sess_data);
				redirect('app/dashboard','refresh');
			}
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
	
}
