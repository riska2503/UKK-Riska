<?php

class Profile extends CI_Controller {

	 
	public function index() 
	{
		$this->load->view('v_profile');
	}

	 function v_biodata($d1, $d2, $d3, $d4, $d5){

		$data = [
			'nama' 		=> $d1,
			'alamat' 	=> $d2,
			'hp'		=> $d3,
			'hobi'	    => $d4,
			'jk' 		=> $d5,
		];
		 $this->load->view('v_biodata', $data);
	} 

	 function tambah_data(){
		 $this->load->view('tambah_data');
	}

	 function action_tambah_data(){

		
			$add = [

				'nama'		=>$this->input->post('nama'),
				'alamat'	=>$this->input->post('alamat'),
				'hp'		=>$this->input->post('hp'),
				'hobi'		=>$this->input->post('hobi'),
				'jk'		=>$this->input->post('jk'),

		];

		$this->load->view('v_biodata', $add);
	}

	 public function tampil_data(){
		 $this->load->model('M_profile');
		 $data['profile'] = $this ->M_profile->tampil_data()->result();
		 $this->load->view('v_tampil_data_profile', $data);
	}
	 public function tambah_data_profile_v(){
		 $this->load->view('tambah_data_profile_v');
	}
	 public function action_tambah_dataa(){
		 $add = [
					'nama_depan'			=> $this->input->post('nama_depan'),
					'nama_belakang'			=> $this->input->post('nama_belakang'),
					'tempat_lahir'			=> $this->input->post('tempat_lahir'),
					'tanggal_lahir'			=> $this->input->post('tanggal_lahir'),
					'jenis_kelamin'			=> $this->input->post('jenis_kelamin'), 
					'alamat'				=> $this->input->post('alamat'),
					'jenjang_pendidikan'	=> $this->input->post('jenjang_pendidikan'),
		 ];

		 $this->db->insert('tbl_profile', $add);
		 redirect('../profile/tampil_data');
	}
	public function update_data ($id){
		$this->load->model('M_profile');
		$data['profile'] = $this->M_profile->get_data_by_id($id)->row_array();
		$this->load->view('update_data_profile_v', $data);
	}
	public function action_update_data(){
		$id =$this->input->post('id');
		$update = [
					'nama_depan'			=> $this->input->post('nama_depan'),
					'nama_belakang'			=> $this->input->post('nama_belakang'),
					'tempat_lahir'			=> $this->input->post('tempat_lahir'),
					'tanggal_lahir'			=> $this->input->post('tanggal_lahir'),
					'jenis_kelamin'			=> $this->input->post('jenis_kelamin'),
					'alamat'				=> $this->input->post('alamat'),
					'jenjang_pendidikan'	=> $this->input->post('jenjang_pendidikan'),
		];

		$update =$this->db->update('tbl_profile', $update, ['id' => $id]);
		redirect('../profile/tampil_data');
	}
	public function hapus_data($id){
		$id = $id;
		$this->db->delete('tbl_profile', ['id' => $id]);
		redirect('../profile/tampil_data');
	}
}
?>