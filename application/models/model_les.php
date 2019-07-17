<?php

	class model_les extends CI_Model{

		public function insert($data, $table){
			$this->db->insert($table, $data);
			$insert_id = $this->db->insert_id();
			return $insert_id;
		}


		public function cek_user($data) {
			$query = $this->db->get_where('autorisasi', $data);
			return $query;
		}

		public function get_user(){
			$this->db->not_like('level', "admin");
			$data = $this->db->get('login');
			return $data->result();
		}
		public function update_profil($id,$data, $table){
			$this->db->where("ID",$id);
			$this->db->update($table, $data);
		}
		public function update_data($id,$data, $table){
			$this->db->where("id_autorisasi",$id);
			$this->db->update($table, $data);
		}
		public function get_profile($id){
			$query = $this->db->select('*')
					->from('autorisasi')
					->join('data_murid','autorisasi.ID=data_murid.id_autorisasi')
					->where('autorisasi.ID',$id)
					->get();
		    return $query;
		}
		public function get_profile_guru($id){
			$query = $this->db->select('*')
					->from('autorisasi')
					->join('data_guru','autorisasi.ID=data_guru.id_autorisasi') 
					->where('autorisasi.ID',$id)
					->get();
		    return $query;
		}

		public function getLamaran($id){
			$query = $this->db->select('*')
					->from('berkas_lamaran_kerja')
				    ->where('id_autorisasi',$id)
				    ->get();
		    return $query;
		}
		public function getLamaranGuru($id){
			return $this->db->query("SELECT * FROM berkas_lamaran_kerja a JOIN autorisasi b ON a.id_autorisasi=b.ID JOIN data_guru c ON a.id_autorisasi=c.id_autorisasi WHERE a.id_autorisasi='$id'");
		}

		public function getDaftarLamaranGuru(){
			$data = $this->db->query("SELECT * FROM berkas_lamaran_kerja a JOIN autorisasi b ON a.id_autorisasi=b.ID");
			if ($data->num_rows()>0) {
				foreach ($data->result() as $value) {
					$query[]=$value;
				}
				return $query;
			}
		    
		}
		public function getGuru(){
			$data = $this->db->query("SELECT * FROM autorisasi a JOIN data_guru b ON a.ID = b.id_autorisasi");
			if ($data->num_rows()>0) {
				foreach ($data->result() as $value) {
					$query[]=$value;
				}
				return $query;
			}
		}
		public function getMurid(){
			$data = $this->db->query("SELECT * FROM autorisasi a JOIN data_murid b ON a.ID = b.id_autorisasi");
			if ($data->num_rows()>0) {
				foreach ($data->result() as $value) {
					$query[]=$value;
				}return $query;
			}
		}
		public function deleteGuru($id_autorisasi, $table){
			$this->db->where("ID", $id_autorisasi);
			$this->db->delete($table);
		}
		public function deleteMurid($id_autorisasi, $table){
			$this->db->where("ID", $id_autorisasi);
			$this->db->delete($table);
		}
		
	}
