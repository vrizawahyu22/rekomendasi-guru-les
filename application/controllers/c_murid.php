<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_murid extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')!="murid"){
			redirect(site_url('brainy_les/login'));
		}
		
	}

	public function index()
	{
		$datauser['nama'] = $this->session->userdata('nama');
		$this->homeafterlogin();
	}
	public function dashboard(){
		$this->load->model('model_les');
		$data['data_murid'] = $this->model_les->get_profile($_SESSION['id_user'])->result();
		$this->load->view("navbar");
		$this->load->view("m_dashboard2", $data);
	}
	public function homeafterlogin(){

		$this->load->view("m_home");
	}
	public function update_profil(){	
		$id = $_SESSION['id_user'];
		$nama = $this->input->post('nama');
		$tanggal_lahir = $this->input->post('tanggal_lahir');	
		$jenis_kelamin = $this->input->post('jenis_kelamin');	
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$pendidikansaatini = $this->input->post('pendidikan_sekarang');
		$tentang = $this->input->post('tentang');
		$fotoprofil = $this->input->post('foto');

		$data_autorisasi=array(
			'nama' => $nama,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' =>$jenis_kelamin,
			'alamat' =>$alamat,
			'telepon' =>$telepon,
			'email' =>$email,
			
		);
		//data untuk tabel murid
		$data_murid=array(
			'pendidikan' =>$pendidikansaatini,
			'tentang' =>$tentang,
			'foto' =>$fotoprofil
		);
		
		$this->model_les->update_profil($id,$data_autorisasi,'autorisasi');
		//database data murid
		$this->model_les->update_data($id,$data_murid,'data_murid');
		redirect(site_url('c_murid/dashboard'));

	}
	public function permintaan_terkirim(){
		$this->load->view("navbar");
		$this->load->view("m_permintaan_terkirim2");
	}
	public function permintaan_diterima(){
		$this->load->view("navbar");
		$this->load->view("m_permintaan_diterima2");
	}
	public function permintaan_ditolak(){
		$this->load->view("navbar");
		$this->load->view("m_permintaan_ditolak2");
	}
	public function bimbingan_saat_ini(){
		$this->load->view("navbar");
		$this->load->view("m_bimbingan_saat_ini2");
	}
	public function riwayat(){
		$this->load->view("navbar");
		$this->load->view("m_riwayat_belajar");
	}
	public function edit_profil(){
		$this->load->model('model_les');
		$data['data_murid'] = $this->model_les->get_profile($_SESSION['id_user'])->result();
		$this->load->view("navbar");
		$this->load->view("m_dashboard-edit", $data);

	}
}