<?php
defined('BASEPATH') or exit('No direct script access allowed');

class brainy_les extends CI_Controller
{

	public function index()
	{
		$this->home();
	}

	// public function contoh(){
	// 	$this->load->view("contoh");
	// }
	public function home()
	{
		$this->load->view("a_login");
		//$this->load->view("navbar3");
		//$this->load->view("a_dashboard");
	}
	public function cariguru()
	{
		$this->load->view("cari-guru");
	}
	public function about_us()
	{
		$this->load->view("about-us");
	}
	public function bantuan()
	{
		$this->load->view("bantuan");
	}
	public function viewlogin()
	{
		$this->load->view("login");
	}
	public function viewregisterguru()
	{
		$this->load->view("g_daftar");
	}
	public function registerguru()
	{
		$nama = $this->input->post('nama');
		$telepon = $this->input->post('telepon');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$level = "guru";

		$data = array(
			'nama' => $nama,
			'telepon' => $telepon,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'email' => $email,
			'password' => md5($password),
			'level' => $level

		);

		$this->load->model('model_les');
		$id = $this->model_les->insert($data, 'autorisasi');

		$data_data['level'] = $level;
		$data_data['email'] = $email;
		$data_data['id_user'] = $id;
		$this->session->set_userdata($data_data);

		$data = array(
			'id_autorisasi' => $id
		);
		$this->model_les->insert($data, 'data_guru');

		redirect(site_url('c_guru/dashboard_guru'));
	}

	public function viewregistermurid()
	{
		$this->load->view("m_daftar");
	}
	public function registermurid()
	{
		$nama = $this->input->post('nama');
		$telepon = $this->input->post('telepon');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$level = "murid";

		$data = array(
			'nama' => $nama,
			'telepon' => $telepon,
			'jenis_kelamin' => $jenis_kelamin,
			'tanggal_lahir' => $tanggal_lahir,
			'email' => $email,
			'password' => md5($password),
			'level' => $level

		);

		$this->load->model('model_les');
		$id = $this->model_les->insert($data, 'autorisasi');


		$data_data['level'] = $level;
		$data_data['email'] = $email;
		$data_data['id'] = $id;
		$this->session->set_userdata($data_data);

		$data = array(
			'id_autorisasi' => $id
		);
		$this->model_les->insert($data, 'data_murid');


		redirect(site_url('c_murid/dashboard'));
	}
	public function login()
	{
		$this->load->model('model_les');
		// $this->model_les->cek_user($data,'autorisasi');

		$data = array(
			'email' => $this->input->post('email', true),
			'password' => md5($this->input->post('password', true))
		);
		$this->load->model('model_les'); //load model user
		$hasil = $this->model_les->cek_user($data);

		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'true';
				$sess_data['id_user'] = $sess->ID;
				$sess_data['email'] = $sess->email;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level') == 'murid') {
				redirect(site_url('c_murid/homeafterlogin'));
			} elseif ($this->session->userdata('level') == 'guru') {
				redirect(site_url('c_guru/dashboard_guru'));
			} elseif ($this->session->userdata('level') == 'admin') {
				redirect(site_url('c_admin/daftarpermintaan'));
			}
		} else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	public function permintaan_belajar()
	{
		$this->load->view("m_form-permintaan-belajar");
	}


	public function wp()
	{
		$jenjang 	= $this->input->post('jenjang');
		$mapel 		= $this->input->post('mapel');
		$pertemuan 	= $this->input->post('pertemuan');

		$jam_mengajar = 21 - (int) $pertemuan * 2;

		$this->load->model('model_les');
		$dtGuru = $this->model_les->getGuruWhere($mapel, $jenjang, $jam_mengajar);
		$bobot 	= $this->model_les->getBobot('bobot_wp');

		//PROSES MENGUBAH LULUSAN DAN LAMA BEKERJA
		for ($i = 0; $i < count($dtGuru); $i++) {
			if ($dtGuru[$i]['lulusan'] == 'S1') {
				$lulusan[$i] = 100;
			} else if ($dtGuru[$i]['lulusan'] == 'D3') {
				$lulusan[$i] = 80;
			} else if ($dtGuru[$i]['lulusan'] == 'D1') {
				$lulusan[$i] = 50;
			} else if ($dtGuru[$i]['lulusan'] == 'SMA') {
				$lulusan[$i] = 30;
			} else {
				$lulusan[$i] = 30;
			}

			$interval = date_diff(date_create($dtGuru[$i]['tgl_mulai_bekerja']), date_create(date("Y-m-d")));
			$lama_bekerja[$i] = $interval->m;
		}

		//PERHITUNGAN VEKTOR S(i)
		$totalVektorS = 0;
		for ($i = 0; $i < count($dtGuru); $i++) {
			$vektorS[$i] =  pow($lama_bekerja[$i], (float) $bobot[0]['bobot'])
				* pow($lulusan[$i], (float) $bobot[1]['bobot'])
				* pow((float) $dtGuru[$i]['rating'], (float) $bobot[2]['bobot'])
				* pow((float) $dtGuru[$i]['sertifikat'], (float) $bobot[3]['bobot'])
				* pow((float) $dtGuru[$i]['jam_mengajar'], (float) $bobot[4]['bobot']);
			$totalVektorS += $vektorS[$i];
		}

		//PERHITUNGAN VEKTOR (i)
		for ($i = 0; $i < count($dtGuru); $i++) {
			$v[$i] = $vektorS[$i] / $totalVektorS;

			$dtGuru[$i]['hasilWP'] = $v[$i];
		}

		foreach ($dtGuru as $key => $row) {
			$volume[$key]  = $row['hasilWP'];
		}
		array_multisort($volume, SORT_DESC,$dtGuru );
		echo json_encode($dtGuru);
		
	}
}
