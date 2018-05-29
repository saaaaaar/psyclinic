<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Model{	
	function __construct(){
		parent::__construct();}


	function posting_artikel($input){
		$this->db->insert('posts', $input);
		return $this->db->insert_id();}

	function get_artikel(){
		return $this->db->order_by("id_post", "desc")->limit(4)->get('posts')->result();}

	function get_list_artikel(){
		return $this->db->order_by("id_post", "desc")->get('posts')->result();}

	function get_detail_artikel($id_post){
		$hasil = $this->db->where('id_post', $id_post)
							 ->get('posts');
		if($hasil->num_rows()>0){
			return $hasil->row();}
		else{
			return array();}	}

}

?>