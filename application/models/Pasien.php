<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Model {
	
	function tampil($table){
		return $this->db->get($table);}
 
	function cek_data($where, $table){
		return $this->db->get_where($table, $where);}
 
	function input_data($data, $table){
		$this->db->insert($table, $data);}
 
	function hapus_data($where, $table){
		$this->db->where($where)
				 ->delete($table);}
 
	function update_data($where, $data, $table){
		$this->db->where($where)
				 ->update($table, $data);}

	function hasil($where){
		 return $this->db->where($where)
		 			 	 ->order_by("tanggal_periksa", "desc")
		 			 	 ->get('hasil_pemeriksaan');}
				 
}
