<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_News extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('News');
		$this->load->model('Pengguna');}

	function index(){
		$this->load->view('production/table/News');}

	function  insert_posting(){
		$config['upload_path']='./assets/upload_img/';
		$config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024*800';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('userfile')){
					echo "gagal";
				 	$error = array('error' => $this->upload->display_errors()); var_dump($error);
		}else{
			$upload_data = $this->upload->data();
       		$input = array(
        	'judul'=>$this->input->post('judul'),
        	'isi'=>$this->input->post('isi'),
        	'tanggal_post'=>$this->input->post('tanggal_post'),
        	'gambar'=>$upload_data['file_name']
        );
        $this->News->posting_artikel($input);
		redirect('C_News/posts');}	}

	function formInsert(){
		$this->load->view('production/form/artikel');}

	//Menampilkan data post
	function posts(){
		$data['post'] = $this->Pengguna->tampil('posts')->result_array();
		$this->load->view('production/table/posts', $data); }

	//Melakukan editing post
	function editPost($id){
		$where = array('id_post' => $id);
		$data['data'] = $this->Pengguna->cek_data($where,'posts')->result_array();
		$this->load->view('production/edit/posts', $data);}
	function updatePost(){
		$config['upload_path']='./assets/upload_img/';
		$config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024*800';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('userfile')){
					echo "gagal";
				 	$error = array('error' => $this->upload->display_errors()); var_dump($error);
		}else{
			$upload_data = $this->upload->data();
       		$input = array(
       		'id_post' => $this->input->post('id'),
        	'judul'=> $this->input->post('judul'),
        	'isi'=> $this->input->post('isi'),
        	'tanggal_post'=> $this->input->post('tanggal_post'),
        	'gambar'=> $upload_data['file_name']
        );
		$where = array('id_post' => $this->input->post('id'));
		$this->Pengguna->update_data($where, $input, 'posts');
		redirect('C_News/posts');}
			 
		}

	//Menghapus post baik didatabase maupun tabel
	function hapusPost($id){
		$where = array('id_post' => $id);
		$this->Pengguna->hapus_data($where,'posts');
		redirect('C_News/posts');}

}

?>