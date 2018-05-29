<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();

		//Apabila username benar dan password benar namun status tidak sama dengan login maka akan dikembalikan ke form login
		if($this->session->userdata('status') != "login"){
			redirect(base_url('Core_controller/nextpages/luar/login'));
		}

		$this->load->model('Pengguna');}

	//Mendapatkan jumlah pasien, psikiater dan perawat untuk ditampilkan di dashboard
 	//Load untuk pertama kali ketika sukses log-in
	function index(){
		$jumlahpasien = $this->Pengguna->tampil('pasien')->num_rows();

		$where = array('kode_akses' => 2);
		$jumlahpsikiater = $this->Pengguna->cek_data($where, 'pengguna')->num_rows();

		$where2 = array('kode_akses' => 1);
		$jumlahperawat = $this->Pengguna->cek_data($where2, 'pengguna')->num_rows();
		$this->load->view('production/dashboard',compact('jumlahpasien','jumlahpsikiater', 'jumlahperawat'));}

	//Menampilkan data-data karyawan
	function tampilKaryawan(){
		$where = array('kode_akses !=' => 0 );
		$data['pengguna'] = $this->Pengguna->cek_data($where, 'pengguna')->result_array();
		$this->load->view('production/table/medical-staff', $data);}

	//Menambahkan karyawan
	function tambah(){
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('gender');
		$no_identitas = $this->input->post('nip');
		$alamat = $this->input->post('alamat');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$kode_akses = $this->input->post('kode_akses');

		if($kode_akses == '1'){
			$jabatan = 'Perawat';
		}else{
			$jabatan = 'Psikiater';
		}

		$data = array(
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_identitas' => $no_identitas,
			'tanggal_daftar' => $tanggal_masuk,
			'tanggal_lahir' => $tanggal_lahir,
			'kode_akses' => $kode_akses,
			'username' => $no_identitas,
			'password' => md5(substr($no_identitas, 0, 8)),
			'jabatan' => $jabatan
		);
		$this->Pengguna->input_data($data, 'pengguna');		
		redirect('Admin/tampilKaryawan');}

	//Melakukan editing data -> fungsi edit dan update
	function edit($id){
		$where = array('id_pengguna' => $id);
		$data['pengguna'] = $this->Pengguna->cek_data($where,'pengguna')->result_array();
		$this->load->view('production/edit/medical-staff', $data);}
	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('gender');
		$no_identitas = $this->input->post('nip');
		$alamat = $this->input->post('alamat');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$kode_akses = $this->input->post('kode_akses');

		if($kode_akses == '1'){
			$jabatan = 'Perawat';
		}else{
			$jabatan = 'Psikiater';
		}

		$data = array(
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_identitas' => $no_identitas,
			'tanggal_daftar' => $tanggal_masuk,
			'tanggal_lahir' => $tanggal_lahir,
			'kode_akses' => $kode_akses,
			'username' => $no_identitas,
			'password' => md5(substr($no_identitas, 0, 8)),
			'jabatan' => $jabatan
		);
		
		$where = array('id_pengguna' => $id);
	 
		$this->Pengguna->update_data($where, $data, 'pengguna');
		redirect('Admin/tampilKaryawan');}

	//Melakukan penghapusan data -> drop row
	function hapus($id){
		$where = array('id_pengguna' => $id);
		$this->Pengguna->hapus_data($where,'pengguna');
		redirect('Admin/tampilKaryawan');}

	//Menampilkan data pengunjung web yang mengisi kuesioner terbuka
	function kuesioner(){
		$data['hasil'] = $this->Pengguna->tampil('kuesioner')->result_array();
		$this->load->view('production/table/kuesioner', $data);}


}