<?php

class Jk extends CI_Controller
{
    function index()
    {
        $data['tbl_jenis_kamar'] = $this->M_jk->SemuaData();

        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/footer');
        $this->load->view('content_admin/jenis_kamar',$data);
    }
    function tambah_data_jenis()
    {
        $data['tbl_jenis_kamar'] = $this->M_jk->SemuaData();

        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/footer');
        $this->load->view('content_admin/tambah_data_jk',$data);
    }
    function proses_tambah_data_jk()
    {

        $add = [
            'nama_jenis_kamar'       => $this->input->post('nama_jenis_kamar'),
            'keterangan'             => $this->input->post('keterangan'),
            'harga'                  => $this->input->post('harga'),
            'foto'                   => $this->input->post('foto'),
        ];
        $this->db->insert('tbl_jenis_kamar', $add);
        redirect(base_url('index.php/jenis_kamar'));
    }
    function update_data($id_jenis)
    {
        $data['tbl_jenis_kamar'] = $this->M_jk->update($id_jenis);
 
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/footer');
        $this->load->view('content_admin/update_data_kamar',$data);
    }
    function proses_update_data()
    {

        $data = [
            'nama_jenis_kamar'       => $this->input->post('nama_jenis_kamar'),
            'keterangan'             => $this->input->post('keterangan'),
            'harga'                  => $this->input->post('harga'),
            'foto'                   => $this->input->post('foto'),
        ];
        $this->db->where('id_jenis', $this->input->post('id_jenis'));
        $this->db->update('tbl_jenis_kamar', $data);
        redirect(base_url('index.php/jenis_kamar'));
    }
    function hapus_data($id_jenis)
    {
        $this->M_jk->hapus($id_jenis);
        redirect(base_url('index.php/jenis_kamar'));
    }
}
