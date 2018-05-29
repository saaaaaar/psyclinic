<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('pengguna');
		$this->load->model('news','artikel');}

	function index(){	
		$data = $this->artikel->get_artikel();
		$this->load->view('index', compact('data'));}

	function nextpages($jenis, $pages){	
		if($jenis == 'luar'){
			$this->load->view('production/'.$pages);}
		else{
			$this->load->view('production/' .$jenis .'/' .$pages);}	}

	function validasi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		$cek = $this->pengguna->cek_data($where, 'pengguna');
		if($cek->num_rows() > 0){

			foreach ($cek->result_array() as $key) {
				$data_session = array(
					'username' => $key['username'],
					'nama' => $key['nama'],
					'kode_akses' => $key['kode_akses'],
					'jabatan' => $key['jabatan'],
					'id' => $key['id_pengguna'],
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
			}
			redirect(base_url('Admin'));
		}else{
			//Apabila tidak ditemukan username dan password terkait
			redirect(base_url('core_controller/nextpages/luar/login'));
			echo "GAGAL";} }

	//Fungsi registrasi pengunjung yang mengisi kuesioner
	function registration(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'tahun_lahir' => $this->input->post('tahun'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'daerah' => $this->input->post('daerah')
		);
		$this->pengguna->input_data($data, 'kuesioner');
		$pasien['pengunjung'] = $this->pengguna->hasil()->result_array();
		$this->load->view('production/form/mental-health-test', $pasien);}
	//Sistem pengambilan keputusan sederhana -> konvensional (percabangan)
	function kuesioner($id){
		$hasil = 0;
		$j1 = $this->input->post('jawaban1');		$j2 = $this->input->post('jawaban2');
		$j3 = $this->input->post('jawaban3');		$j4 = $this->input->post('jawaban4');
		$j5 = $this->input->post('jawaban5');		$j6 = $this->input->post('jawaban6');
		$j7 = $this->input->post('jawaban7');		$j8 = $this->input->post('jawaban8');
		$j9 = $this->input->post('jawaban9');		$j10 = $this->input->post('jawaban10');
		$j11 = $this->input->post('jawaban11');		$j12 = $this->input->post('jawaban12');
		$j13 = $this->input->post('jawaban13');		$j14 = $this->input->post('jawaban14');
		$j15 = $this->input->post('jawaban15');

		if($j1 == "Ya"){ $hasil++;}		if($j2 == "Ya"){ $hasil++;}
		if($j3 == "Ya"){ $hasil++;}		if($j4 == "Ya"){ $hasil++;}
		if($j5 == "Ya"){ $hasil++;}		if($j6 == "Ya"){ $hasil++;}
		if($j7 == "Ya"){ $hasil++;}		if($j8 == "Ya"){ $hasil++;}
		if($j9 == "Ya"){ $hasil++;}		if($j10 == "Ya"){ $hasil++;}
		if($j11 == "Ya"){ $hasil++;}	if($j12 == "Ya"){ $hasil++;}
		if($j13 == "Ya"){ $hasil++;}	if($j14 == "Ya"){ $hasil++;}
		if($j15 == "Ya"){ $hasil++;}

		if($hasil >= 0 && $hasil <=3){	$diagnosa = "Bipolar Disorder";}
		elseif($hasil <= 5){	$diagnosa = "Enosimania";}
		elseif($hasil <= 7){	$diagnosa = "Skizofrenia";}
		elseif($hasil <= 9){	$diagnosa = "Obesessive Compulsive Disorder/OCD";}
		elseif($hasil <= 13){	$diagnosa = "Anxiety Disorder";}
		else{	$diagnosa = "Skizoaffective";}

		$data = array('j1' => $j1, 'j2' => $j2,	'j3' => $j3, 'j4' => $j4, 'j5' => $j5, 'j6' => $j6, 'j7' => $j7, 'j8' => $j8, 
			'j9' => $j9, 'j10' => $j10, 'j11' => $j11, 'j12' => $j12, 'j13' => $j13, 'j14' => $j14, 'j15' => $j15,
			'total' => $hasil, 'diagnosa' => $diagnosa
		);

		$this->pengguna->update_data(array('id_penjawab' => $id), $data, 'kuesioner');
		$data['pengunjung'] = $this->pengguna->cek_data(array('id_penjawab' => $id), 'kuesioner')->result_array();
		$this->load->view('production/table/result-test', $data);}

	function keluar(){
		$this->session->sess_destroy();
		redirect(base_url('core_controller/nextpages/luar/login'));}

}
