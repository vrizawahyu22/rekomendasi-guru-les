<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function daftarpermintaan(){
		$this->load->model('model_les');
		$data['data_guru'] = $this->model_les->getDaftarLamaranGuru();
		$this->load->view("navbar3");
		$this->load->view("a_dashboard", $data);
	}
	public function daftarguru(){
		$this->load->model('model_les');
		$data['data_guru'] = $this->model_les->getGuru();
		$this->load->view("navbar3");
		$this->load->view("a_daftar_guru", $data);
	}
	public function daftarmurid(){
		$this->load->model('model_les');
		$data['data_murid'] = $this->model_les->getMurid();
		$this->load->view("navbar3");
		$this->load->view("a_daftar_murid", $data);
	}
	public function transaksi(){
		$this->load->view("navbar3");
		$this->load->view("a_transaksi");
	}
	public function daftargaji(){
		$this->load->view("navbar3");
		$this->load->view("a_daftar_gaji");
	}
	public function detail($id){
		$data['berkas_lamaran_kerja'] = $this->model_les->getLamaranGuru($id);
		$this->load->model('model_les');
		$this->load->view("detail_lamaran_kerja",$data);
	}
	public function hapusguru($id_autorisasi){
		$this->load->model('model_les');
		$data['hapus'] = $this->model_les->deleteGuru($id_autorisasi, 'autorisasi');
		
		redirect('c_admin/daftarguru');
	}
	public function hapusmurid($id_autorisasi){
		$this->load->model('model_les');
		$data['hapus'] = $this->model_les->deleteMurid($id_autorisasi, 'autorisasi');
		
		redirect('c_admin/daftarmurid');
	}
}