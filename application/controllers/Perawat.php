<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawat extends CI_Controller {
	//COBA
	function __construct(){
		parent::__construct();

		//Apabila username benar dan password benar namun status tidak sama dengan login maka akan dikembalikan ke form login
		if($this->session->userdata('status') != "login"){
			redirect(base_url('Core_controller/nextpages/luar/login'));
		}

		$this->load->model('Pasien');
		$this->load->model('Pengguna');}

	function index(){
		$data['pasien'] = $this->Pasien->tampil('pasien')->result_array();
		$data['psikiater'] = $this->Pengguna->psikiater()->result_array();
		$this->load->view('production/table/patient', $data);}

	function tambah(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'tanggal_masuk' => $this->input->post('tanggal_masuk'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
			'no_identitas' => $this->input->post('no_id'),
			'nama_penanggung' => $this->input->post('nama_penanggung'),
			'alamat_penanggung' => $this->input->post('alamat_penanggung'),
			'no_telp_penanggung' => $this->input->post('no_telp_penanggung'),
			'hubungan' => $this->input->post('hubungan'),
			'jenis_kelamin_penanggung' => $this->input->post('gender_penanggung'),
			'no_rm' => $this->input->post('no_rm'),
			'agama' => $this->input->post('agama'),
			'no_telp' => $this->input->post('no_telepon'),
			'pernikahan' => $this->input->post('status'),
			'riwayat' => FALSE,
			'anamnese' => FALSE
		);
		$this->Pasien->input_data($data, 'pasien');
		redirect('perawat');}

	function isiAnamnese($id){
		$data['data'] = $this->Pasien->cek_data(array('id_pasien' => $id), 'pasien')->result_array();
		$data['psikiater'] = $this->Pengguna->cek_data(array('kode_akses' => 2), 'pengguna')->result_array();
		$this->load->view('production/form/anamnese', $data);}
	function tambahAnamnese(){
		$id = $this->input->post('id_pasien');
		$data = array(
			'kesan' => $this->input->post('kesan'),
			'keluhan_awal' => $this->input->post('keluhan'),
			'tekanan_darah' => $this->input->post('tek_darah'),
			'suhu' => $this->input->post('suhu'),
			'nadi' => $this->input->post('nadi'),
			'tinggi_badan' => $this->input->post('tinggi_badan'),
			'berat_badan' => $this->input->post('berat_badan'),
			'gol_dar' => $this->input->post('gol_dar'),
			'pemeriksaan_fisik' => $this->input->post('pem_fisik'),
			'diagnosa' => $this->input->post('diagnosa'),
			'kode_Pasien' => $this->input->post('id_pasien'),
			'alasan_masuk' => $this->input->post('alasan_masuk'),
			'kode_psikiater' => $this->input->post('psikiater')
			);
		$Pasien = array(
			'anamnese' => TRUE
		);

		$this->Pasien->input_data($data, 'anamnese');
		$this->Pasien->update_data(array('id_pasien' => $id), $pasien, 'pasien');
		redirect('perawat');}

	function isiRiwayat($id){
		$data['pasien'] = $this->Pasien->cek_data(array('id_pasien' => $id), 'pasien')->result_array();
		$this->load->view('production/form/riwayat', $data);}
	function tambahRiwayat(){
		$id = $this->input->post('id_pasien');
		$data = array(
			'kode_pasien' => $id,
			'Pasien' => $this->input->post('pasien'),
			'penjelasan_pasien' => $this->input->post('penjelasan_pasien'),
			'pengobatan_pasien' => $this->input->post('pengobatan_pasien'),
			'bentuk_pengobatan' => $this->input->post('bentuk_pengobatan'),
			'fisik' => $this->input->post('fisik'),
			'penjelasan_fisik' => $this->input->post('penjelasan_fisik'),
			'jenis_kejadian' => $this->input->post('jenis_kejadian'),
			'penjelasan_kejadian' => $this->input->post('penjelasan_keadaan'),
			'pengalaman' => $this->input->post('pengalaman'),
			'penjelasan_pengalaman' => $this->input->post('penjelasan_pengalaman'),
			'keluarga' => $this->input->post('keluarga'),
			'hubungan' => $this->input->post('hubungan'),
			'penjelasan_keluarga' => $this->input->post('penjelasan_keluarga')
		);

		$pasien = array(
			'riwayat' => TRUE
		);

		$this->Pasien->input_data($data, 'riwayat');
		$this->Pasien->update_data(array('id_pasien' => $id), $pasien, 'pasien');
		redirect('perawat');}

	//Melakukan editing data -> fungsi edit dan update
	function edit($id){
		$where = array('id_pasien' => $id);
		$data['pasien'] = $this->Pasien->cek_data($where,'pasien')->result_array();
		$this->load->view('production/edit/patient', $data);}
	function update(){
		$id = $this->input->post('id_pasien');
		$data = array(
			'nama' => $this->input->post('nama'),
			'tanggal_masuk' => $this->input->post('tanggal_masuk'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
			'no_identitas' => $this->input->post('no_id'),
			'nama_penanggung' => $this->input->post('nama_penanggung'),
			'alamat_penanggung' => $this->input->post('alamat_penanggung'),
			'no_telp_penanggung' => $this->input->post('no_telp_penanggung'),
			'hubungan' => $this->input->post('hubungan'),
			'jenis_kelamin_penanggung' => $this->input->post('gender_penanggung'),
			'no_rm' => $this->input->post('no_rm'),
			'agama' => $this->input->post('agama'),
			'no_telp' => $this->input->post('no_telp'),
			'pernikahan' => $this->input->post('status'),
			'status' => TRUE
		);
		$this->Pengguna->update_data(array('id_pasien' => $id), $data, 'pasien');
		redirect('perawat');}

	//Melakukan penghapusan data -> drop row
	function hapus($id){
		$this->Pasien->hapus_data(array('kode_pasien' => $id),'anamnese');
		$this->Pasien->hapus_data(array('kode_pasien' => $id),'riwayat');
		$this->Pasien->hapus_data(array('kode_pasien' => $id),'hasil_pemeriksaan');
		$this->Pasien->hapus_data(array('id_pasien' => $id),'pasien');
		redirect('perawat');}

	//belum Dibuat
	function lihat($id){
		$data['pasien'] = $this->Pasien->cek_data(array('id_pasien' => $id), 'pasien')->result_array();
		$data['anamnese'] = $this->Pasien->cek_data(array('kode_pasien' => $id), 'anamnese')->result_array();
		$data['riwayat'] = $this->Pasien->cek_data(array('kode_pasien' => $id), 'riwayat')->result_array();
		$this->load->view('production/table/profile', $data);}

}