<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psikiater extends CI_Controller {
	function __construct(){
		parent::__construct();

		//Apabila username benar dan password benar namun status tidak sama dengan login maka akan dikembalikan ke form login
		if($this->session->userdata('status') != "login"){
			redirect(base_url('Core_controller/nextpages/luar/login'));
		}

		$this->load->model('Pengguna');
		$this->load->model('Pasien');
	}
 
	function index(){
		$where = array('kode_psikiater' => $this->session->userdata('id'));
		$data['anamnese'] = $this->Pasien->cek_data($where, 'anamnese')->result_array();
		$data['pasien'] = $this->Pasien->tampil('pasien')->result_array();
		$this->load->view('production/table/patient', $data);}

	function lihat($id){
		$data['pasien'] = $this->Pasien->cek_data(array('id_pasien' => $id), 'pasien')->result_array();
		$data['riwayat'] = $this->Pasien->cek_data(array('kode_pasien' => $id), 'riwayat')->result_array();
		$data['anamnese'] = $this->Pasien->cek_data(array('kode_pasien' => $id), 'anamnese')->result_array();
		$data['hasil'] = $this->Pasien->hasil(array('kode_pasien' => $id))->result_array();

		//$data['Psikiater'] = $this->Pengguna->nama_Psikiater()->result_array();
		$this->load->view('production/table/profile', $data);}

	function form($id){
		$data['pasien'] = $this->Pasien->cek_data(array('id_pasien' => $id), 'pasien')->result_array();
		$this->load->view('production/form/medical-record', $data);}

	function tambah(){
		$id = $this->input->post('id_pasien');
		$data = array(
			'tanggal_periksa' => $this->input->post('tanggal_periksa'),
			'tekanan_darah' => $this->input->post('tekanan_darah'),
			'berat_badan' => $this->input->post('berat_badan'),
			'masalah' => $this->input->post('masalah'),
			'diagnosa' => $this->input->post('diagnosa'),
			'kode_pasien' => $id
			);

		$this->Pasien->input_data($data, 'hasil_pemeriksaan');
		redirect('Psikiater/lihat/'.$id);}

}