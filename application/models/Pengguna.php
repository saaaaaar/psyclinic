<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Model {
	
	function tampil($table){
		return $this->db->get($table);}
 
	function cek_data($where, $table){
		return $this->db->get_where($table, $where);}
 
	function input_data($data, $table){
		$this->db->insert($table, $data);}
 
	function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);}
 
	function update_data($where, $data, $table){
		$this->db->where($where)
				 ->update($table, $data);}

	function hasil(){
		return $this->db->order_by("id_penjawab", "desc")
						->limit(1)
		 			 	->get('kuesioner');}

	function psikiater(){
	    $this->db->select('*')
	    		 ->from('pengguna')
	    		 ->join('anamnese', 'anamnese.kode_psikiater = pengguna.id_pengguna');
	    return $this->db->get();}	
	  
}
