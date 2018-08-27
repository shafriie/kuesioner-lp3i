<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('isLogged')) {
			redirect('login','refresh');
		}
		$this->load->model('M_app');
		$this->load->library('form_validation');
	}

	public function index()
	{
		
	}

	public function dashboard()
	{
		$this->load->view('App/dashboard');
	}

	public function petugas()
	{
		$data['petugas'] = $this->M_app->getDataPetugas();
		$this->load->view('App/petugas',$data);
	}

	public function petugasAction($action,$id="")
	{
		if ($action == 'edit') {
			$id = $this->input->post('id');
			$result = $this->M_app->editPetugas($id);	
		}
		else if ($action == 'insert') {
			$this->form_validation->set_rules('user', 'User', 'trim|required|is_unique[login.user]');
			if ($this->form_validation->run() == FALSE) 
			{
				$result = array('info' => false,'msg'=>'User sudah ada di database' );
			}
			else
			{
				$post = $this->input->post();
				$result = $this->M_app->insertPetugas($post);	
			}
			
		}	
		else if ($action == 'update') {
			$post = $this->input->post();
			$result = $this->M_app->updatePetugas($post);	
		}	
		else if ($action == 'delete') {
			$result = $this->M_app->deletePetugas($id);
		}

		echo json_encode($result);
	}

	public function sekolah()
	{
		$data['sekolah'] = $this->M_app->getData('sekolah');
		$this->load->view('App/sekolah',$data);
	}

	public function sekolahAction($action,$id="")
	{
		if ($action == 'delete') {
			$result = $this->M_app->deleteSekolah($id);
		}
		else if ($action == 'insert') {
			$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required|is_unique[sekolah.nama_sekolah]');
			if ($this->form_validation->run() ==  FALSE) 
			{
				$result = array('info' => false, 'msg'=>'Nama Sekolah tidak boleh sama' );
			} 
			else 
			{
				$post = $this->input->post();
				$result = $this->M_app->insertSekolah($post);	
			}
			
		}
		else if ($action == 'edit') {
			$id = $this->input->post('id');
			$result = $this->M_app->editSekolah($id);
		}
		else if ($action == 'update') {
			$post = $this->input->post();
			$result = $this->M_app->updateSekolah($post);	
		}
		echo json_encode($result);
	}

	public function jurusan()
	{
		$data['jurusan'] = $this->M_app->getData('jurusan');
		$this->load->view('App/jurusan', $data);
	}

	public function jurusanAction($action, $id="")
	{
		if ($action == 'delete') {
			$result = $this->M_app->deleteJurusan($id);
		}
		else if ($action == 'edit') {
			$id = $this->input->post('id');
			$result = $this->M_app->editJurusan($id);
		}
		else if ($action == 'insert') {
			$this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'trim|required|is_unique[jurusan.kode_jurusan]');
			if ($this->form_validation->run() == FALSE) {
				$result = array('info' => false , 'msg'=>'Kode Jurusan tidak boleh sama' );
			} else {
				$post = $this->input->post();
				$result = $this->M_app->insertJurusan($post);
			}
		}
		else if ($action == 'update') {
			$post = $this->input->post();
			$result = $this->M_app->updateJurusan($post);
		}
		echo json_encode($result);
	}

	public function presenter()
	{
		$data['presenter'] = $this->M_app->getData('presenter');
		$this->load->view('App/presenter', $data);
	}

	public function presenterAction($action, $id="")
	{
		if ($action == 'delete') {
			$result = $this->M_app->deletePresenter($id);
		}
		else if ($action == 'edit') {
			$id = $this->input->post('id');
			$result = $this->M_app->editPresenter($id);
		}
		else if ($action == 'insert') {
			$post = $this->input->post();
			$result = $this->M_app->insertPresenter($post);
		}
		else if ($action == 'update') {
			$post = $this->input->post();
			$result = $this->M_app->updatePresenter($post);
		}
		echo json_encode($result);
	}

	public function kuesioner()
	{
		$data['siswa'] = $this->M_app->getData('siswa');
		$this->load->view('App/kuesioner',$data);
	}

	public function inputKuesioner()
	{
		$data['sekolah'] = $this->M_app->getData('sekolah');
		$data['jurusan'] = $this->M_app->getData('jurusan');
		$data['presenter'] = $this->M_app->getData('presenter');
		$this->load->view('App/inputKuesioner',$data);
	}

	public function insertKuesioner()
	{
		$post = $this->input->post();
		$result = $this->M_app->insertKuesioner($post);
	}

	public function laporan()
	{
		$data['laporan'] = $this->M_app->getDataLaporan();
		$this->load->view('App/laporan', $data);
	}

	public function detailSiswa($id)
	{
		$data['dataRows'] = $this->M_app->getDetailSiswa($id);
		$data['sekolah'] = $this->M_app->getData('sekolah');
		$data['jurusan'] = $this->M_app->getData('jurusan');
		$data['presenter'] = $this->M_app->getData('presenter');
		$this->load->view('App/detailKuesioner', $data);
	}
}

/* End of file App.php */
/* Location: ./application/controllers/App.php */