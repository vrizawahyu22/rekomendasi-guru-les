<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_guru extends CI_Controller {
	

	public function index()
	{
		$this->load->view('home');
	}
	public function dashboard_guru(){
		$data['data_guru'] = $this->model_les->get_profile_guru($_SESSION['id_user'])->result();
		
		$this->load->model('model_les');
		$this->load->view("navbar2");
		$this->load->view("g_dashboard2", $data);
	}
	public function lamaran_kerja(){
		$this->load->model('model_les');
		$data['data_guru'] = $this->model_les->get_profile_guru($_SESSION['id_user'])->result();
		$data['lamaran'] = $this->model_les->getLamaran($_SESSION['id_user'])->result();
		$this->load->view("navbar2");
		if($data['lamaran']==null){
			
			$this->session->set_flashdata('nolamaran','');
			
			$this->load->view("g_lamaran_kerja",$data);
		}else {
			$this->session->set_flashdata('lamaran','');
			$this->load->view("g_lamaran_kerja",$data);
		}
		
		
	}

	public function addLamarKerja(){
		$sertif1="";
		$sertif2="";
		$sertif3="";
		$sertif4="";
		$sertif5="";
		$sertif6="";


		$this->load->library('upload');
		$config['upload_path']   = './assets/upload/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';

		$this->upload->initialize($config);

		//upload cv
		$this->upload->do_upload('cv');
		$resultcv = $this->upload->data();

		//upload foto 3X4
		$this->upload->do_upload('foto');
		$resultfoto3x4 = $this->upload->data();

		//upload sertifpendukung1
		if($_FILES['sertifikat1']['name']){
			$this->upload->do_upload('sertifikat1');
			$resultsertif1 = $this->upload->data();
			$sertif1 = $resultsertif1['file_name'];
		}
		

		//upload sertifpendukung2
		if($_FILES['sertifikat2']['name']){
			$this->upload->do_upload('sertifikat2');
			$resultsertif2 = $this->upload->data();
			$sertif2 = $resultsertif2['file_name'];
		}

		//upload sertifpendukung3
		if($_FILES['sertifikat3']['name']){
			$this->upload->do_upload('sertifikat3');
			$resultsertif3 = $this->upload->data();
			$sertif3 = $resultsertif3['file_name'];
		}

		//upload sertifpendukung4
		if($_FILES['sertifikat4']['name']){
			$this->upload->do_upload('sertifikat4');
			$resultsertif4 = $this->upload->data();
			$sertif4 = $resultsertif4['file_name'];
		}

		//upload sertifpendukung5
		if($_FILES['sertifikat5']['name']){
			$this->upload->do_upload('sertifikat5');
			$resultsertif5 = $this->upload->data();
			$sertif5 = $resultsertif5['file_name'];
		}

		//upload sertifpendukung6
		if($_FILES['sertifikat6']['name']){
			$this->upload->do_upload('sertifikat6');
			$resultsertif6 = $this->upload->data();
			$sertif6 = $resultsertif6['file_name'];
		}

		$result = array(
			'cv'=>$resultcv, 
			'foto' =>$resultfoto3x4 , 
		);
		

		$cv = $result['cv']['file_name'];
		$foto = $result['foto']['file_name'];
	

		$this->load->model('model_les');
		$id = $_SESSION['id_user'];
		$bidang_keahlian = $this->input->post('bidang_keahlian');
		$tarif = $this->input->post('tarif');
		
		$data = array (
			'id_autorisasi' => $id,
			'bidang_keahlian' => $bidang_keahlian,
			'cv' => $cv,
			'foto_resmi' => $foto,
			'tarif' => $tarif,
			'sertifikat1' => $sertif1,
			'sertifikat2' => $sertif2,
			'sertifikat3' => $sertif3,
			'sertifikat4' => $sertif4,
			'sertifikat5' => $sertif5,
			'sertifikat6' => $sertif6,
		);
		// print_r($data);

		$this->model_les->insert($data,'berkas_lamaran_kerja');

		redirect(site_url('c_guru/lamaran_kerja'));

		
	}
	public function permintaanmengajar(){
		$this->load->view("navbar2");
		$this->load->view("g_daftar_permintaan");
	}
	public function bimbinganguru(){
		$this->load->view("navbar2");
		$this->load->view("g_bimbingan_saat_ini2");
	}
	public function riwayat_guru(){
		$this->load->view("navbar2");
		$this->load->view("g_riwayat2");
	}
	public function edit_profil_guru(){
		$this->load->model('model_les');
		$data['data_guru'] = $this->model_les->get_profile_guru($_SESSION['id_user'])->result();

		$this->load->view("navbar2");
		$this->load->view("g_dashboard-edit", $data);
	}
	public function update_profil(){
		$id = $_SESSION['id_user'];
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');	
		$jenis_kelamin = $this->input->post('jenis_kelamin');	
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$jenjang_pendidikan= $this->input->post('jenjang_pendidikan');
		$bidang_keahlian = $this->input->post('bidang_keahlian');
		$tentang = $this->input->post('tentang');
		$fotoprofil = $this->input->post('foto');

		$data_autorisasi=array(
			'nama' => $nama,
			'tempat_lahir' =>$tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' =>$jenis_kelamin,
			'alamat' =>$alamat,
			'telepon' =>$telepon,
			'email' =>$email
		);
		//data untuk tabel murid
		$data_guru=array(
			'jenjang_pendidikan' =>$jenjang_pendidikan,
			'bidang_keahlian' =>$bidang_keahlian,
			'tentang' =>$tentang,
			'foto' =>$fotoprofil
		);
		
		$this->model_les->update_profil($id,$data_autorisasi,'autorisasi');
		//database data murid
		$this->model_les->update_data($id,$data_guru,'data_guru');
		redirect(site_url('c_guru/dashboard_guru'));

	}
}