<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modeldata extends CI_Model {

//login
	public function cek_user($data) {
			$query = $this->db->get_where('login', $data);
			return $query;
		}
			public function cek_admin($data) {
			$query = $this->db->get_where('login', $data);
			return $query;
		}
	public function tampil_user(){
		$row=$this->db->query("SELECT * FROM login");
		return $row->result_array();
	}
//===================================================================================
// 		//master atk
// 	public function tampildata(){
// 		$row=$this->db->query("SELECT * FROM barang");
// 		return $row->result_array();
// 		// return $this->db->get('barang');
// 	}
// 	public function input_data($data,$table){
// 		$this->db->insert($table,$data);
// 	}
// 	public function edit_data($where,$table){		
// 		return $this->db->get_where($table,$where)->result_array();
// 	}
// 	public function update_data($where,$data,$table){
// 		$this->db->where($where);
// 		$this->db->update($table,$data);
// 		// return $this->db->get()->result_array();
// 	}
// 	public function hapus_data($where,$table){
// 		$this->db->where($where);
// 		$this->db->delete($table);
// 	}
// 	public function biro()
// 	{
// 		$data = $this->db->query("SELECT * FROM biro");
// 		return $data->result_array();
// 	}
// 	public function buat_kode()   {
// 		  $this->db->select('RIGHT(barang.kodebrg,1) as kode', FALSE);
// 		  $this->db->order_by('kodebrg','DESC');    
// 		  $this->db->limit(1);    
// 		  $query = $this->db->get('barang');      //cek dulu apakah ada sudah ada kode di tabel.    
// 		  if($query->num_rows() <> 0){      
// 		   //jika kode ternyata sudah ada.      
// 		   $data = $query->row();      
// 		   $kode = intval($data->kode) + 1;    
// 		  }
// 		  else {      
// 		   //jika kode belum ada      
// 		   $kode = 1;    
// 		  }
// 		  $kodemax = str_pad($kode, 1,  STR_PAD_LEFT); // angka 1 menunjukkan jumlah digit angka 0
// 		  $kodejadi = "1010306010000000".$kodemax;
// 		  return $kodejadi;  
// 	}
// //============================================================================================
// 	//transaksi
// 	public function tampiltrans(){
// 		$row=$this->db->query("SELECT * FROM transaksi");
// 		return $row->result_array();
// 	}

	
// 	function edit_datatr($where,$table){		
// 		return $this->db->get_where($table,$where)->result_array();
// 	}
	
// 	public function kodetrans()   {
// 		  $this->db->select('RIGHT(header_atk.norutan,4) as kode', FALSE);
// 		  $this->db->order_by('norutan','DESC');    
// 		  $this->db->limit(1);    
// 		  $query = $this->db->get('header_atk');      //cek dulu apakah ada sudah ada kode di tabel.    
// 		  if($query->num_rows() <> 0){      
// 		   //jika kode ternyata sudah ada.      
// 		   $data = $query->row();      
// 		   $kode = intval($data->kode) + 1;    
// 		  }
// 		  else {      
// 		   //jika kode belum ada      
// 		   $kode = 1;    
// 		  }
// 		  $kodemax = str_pad($kode, 4,"0",  STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
// 		  $kodejadi = "NP-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
// 		  return $kodejadi;  
// 	}
// 	function edit_us($where,$table){		
// 		return $this->db->get_where($table,$where)->result_array();
// 	}
}
