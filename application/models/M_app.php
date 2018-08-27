<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_app extends CI_Model {

	public function getDataLaporan()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('setelah_lulus', 'Kuliah');
		$this->db->where('minat_kuliah', 'Ya');
		$data = $this->db->get()->result();
		return $data;
	}

	public function getData($table)
	{
		$data = $this->db->get($table)->result();
		return $data;
	}

	public function getDataPetugas()
	{
		$this->db->where('lvl', 'user');
		$data = $this->db->get('login')->result();
		return $data;
	}

	public function insertPetugas($post)
	{
		$object = array('user' => $post['user'], 'pass'=>$post['pass'],'lvl'=>'user' );
		$this->db->insert('login', $object);
		if ($this->db->affected_rows() === 1) {
			$result = array('info' => true );
		}
		else
		{
			$result = array('info' => false, 'msg'=>'Gagal memasukan data' );	
		}
		return $result;
	}

	public function updatePetugas($post)
	{
		$object = array('user' => $post['user'], 'pass'=>$post['pass'],'lvl'=>'user' );
		$this->db->where('id', $post['id']);
		$this->db->update('login', $object);
		if ($this->db->affected_rows() === 1) {
			$result = array('info' => true );
		}
		else
		{
			$result = array('info' => false, 'msg'=>'Data tidak ada yang dirubah' );	
		}
		return $result;
	}

	public function deletePetugas($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('login');
		if ($this->db->affected_rows() === 1) {
			echo "<script>alert('Data berhasil dihapus');</script>";
			redirect('app/petugas','refresh');
		}
	}

	public function editPetugas($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('login')->row_array();
		return $data;
	}

	public function deleteSekolah($id)
	{
		$this->db->where('id_sekolah', $id);
		$this->db->delete('sekolah');
		echo "<script>alert('Berhasil menghapus data ini');</script>";
		redirect('app/sekolah','refresh');
	}

	public function insertSekolah($post)
	{
		$object = array('nama_sekolah' => $post['nama_sekolah']);
		$this->db->insert('sekolah', $object);
		if ($this->db->affected_rows() === 1) {
			$result = array('info' => true);
		}		
		else
		{
			$result = array('info' => false);
		}
		return $result;
	}

	public function editSekolah($id)
	{
		$this->db->where('id_sekolah', $id);
		$data = $this->db->get('sekolah')->row();
		return $data;
	}

	public function updateSekolah($post)
	{
		$object = array('nama_sekolah' => $post['nama_sekolah']);
		$this->db->where('id_sekolah', $post['id_sekolah']);
		$this->db->update('sekolah', $object);
		if ($this->db->affected_rows() === 1) {
			$result = array('info' => true);
		}		
		else
		{
			$result = array('info' => false);
		}
		return $result;
	}

	public function deleteJurusan($id)
	{
		$this->db->where('kode_jurusan', $id);
		$this->db->delete('jurusan');
		echo "<script>alert('berhasil menghapus data!');</script>";
		redirect('app/jurusan','refresh');
	}

	public function editJurusan($id)
	{
		$this->db->where('kode_jurusan', $id);
		$data = $this->db->get('jurusan')->row();
		return $data;
	}

	public function insertJurusan($post)
	{
		$object = array('kode_jurusan'=>$post['kode_jurusan'], 'nama_jurusan' => $post['nama_jurusan']);
		$this->db->insert('jurusan', $object);
		$result = array('info' => true );
		return $result;
	}

	public function updateJurusan($post)
	{
		$object = array('nama_jurusan' => $post['nama_jurusan']);
		$this->db->where('kode_jurusan', $post['kode_jurusan']);
		$this->db->update('jurusan', $object);
		$result = array('info' => true );
		return $result;
	}

	public function deletePresenter($id)
	{
		$this->db->where('kd_presenter', $id);
		$this->db->delete('presenter');
		echo "<script>alert('Data anda berhasil dihapus');</script>";
		redirect('app/presenter','refresh');
	}

	public function editPresenter($id)
	{
		$this->db->where('kd_presenter', $id);
		$data = $this->db->get('presenter')->row();
		return $data;
	}

	public function insertPresenter($post)
	{
		$object = array('nama_presenter' =>$post['nama_presenter'] );
		$this->db->insert('presenter', $object);
		$result = array('info' =>true );
		return $result;
	}

	public function updatePresenter($post)
	{
		$object = array('nama_presenter' =>$post['nama_presenter'] );
		$this->db->where('kd_presenter', $post['kd_presenter']);
		$this->db->update('presenter', $object);
		$result = array('info' =>true );
		return $result;
	}

	public function insertKuesioner($post)
	{
		$object = array(
						'nama_lengkap' 		=> $post['nama_lengkap'], 
						'tempat_lahir' 		=> $post['tempat_lahir'], 
						'tgl_lahir' 		=> $post['tgl_lahir'], 
						'jenis_kelamin' 	=> $post['jenis_kelamin'], 
						'alamat' 			=> $post['alamat'], 
						'telepon_rumah' 	=> $post['telepon_rumah'], 
						'telepon_wa' 		=> $post['telepon_wa'], 
						'nama_sekolah' 		=> $post['nama_sekolah'], 
						'jurusan_sekolah' 	=> $post['jurusan_sekolah'], 
						'agama'				=> $post['agama'], 
						'email_facebook' 	=> $post['email_facebook'], 
						'pin_bb' 		=> $post['pin_bb'], 
						'instagram' 	=> $post['instagram'], 
						'line' => $post['line'], 
						'twitter' => $post['twitter'], 
						'nama_ortu' => $post['nama_ortu'], 
						'pekerjaan_ortu' => $post['pekerjaan_ortu'], 
						'telp_ortu' => $post['telp_ortu'], 
						'setelah_lulus' => $post['setelah_lulus'], 
						'presenter' => $post['presenter'], 
						'minat_kuliah' => $post['minat_kuliah'], 
						'konsentrasi' => $post['konsentrasi'], 
				);
		$this->db->insert('siswa', $object);
		if ($this->db->affected_rows() === 1) {
			echo "<script>alert('Berhasil memasukkan data');</script>";redirect('app/kuesioner','refresh');
		}
		else
		{
			echo "<script>alert('Gagal memasukkan data');</script>";redirect('app/kuesioner','refresh');
		}
	}

	public function getDetailSiswa($id)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id', $id);
		$data = $this->db->get()->result();
		return $data;
	}
}

/* End of file M_app.php */
/* Location: ./application/models/M_app.php */