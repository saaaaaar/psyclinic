<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ListArtikel extends CI_Controller{
	function __construct(){
 		parent::__construct();
 		$this->load->model('News');}

	public function index(){
		$hasil = $this->News->get_list_artikel();
		$this->load->view('production/table/news', compact('hasil'));	}

}

?>