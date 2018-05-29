<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_DetailArtikel extends CI_Controller{
	function __construct(){
 		parent::__construct();
 		$this->load->model('News');	}

	public function index(){
		$id_article = $this->input->get('id_post');
		$hasil = $this->News->get_detail_artikel($id_article);
		$this->load->view('production/table/detail-artikel', compact('hasil'));}

}

?>