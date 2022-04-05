<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_ppdb extends CI_model
{
    public function SemuaData()
    {
     return $this->db->get('ppdb')->result_array();
    }
    public function proses_tambah_data()
    {
        $data = [

            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email'),
            "no_hp" => $this->input->post('no_hp'),
            "jurusan" => $this->input->post('jurusan'),
            "nik" => $this->input->post('nik'),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "status" => $this->input->post('status'),
            "tempat_lahir" => $this->input->post('tempat_lahir'),
            "bukti_pembayaran" => $this->input->post('bukti_pembayaran'),

        ];

        $this->db->insert('ppdb', $data);
    }

    public function hapus_data($nisn)
    {
        $this->db->where('nisn',$nisn);
        $this->db->delete('ppdb');
    }

    public function ambil_nisn_peserta($nisn)
    {
       return $this->db->get_where('ppdb',['nisn' => $nisn])-> row_array();
    }

    public function proses_edit_data()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email'),
            "no_hp" => $this->input->post('no_hp'),
            "jurusan" => $this->input->post('jurusan'),
            "nik" => $this->input->post('nik'),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "status" => $this->input->post('status'),
            "tempat_lahir" => $this->input->post('tempat_lahir'),
            "bukti_pembayaran" => $this->input->post('bukti_pembayaran'),
        ];

        $this->db->where('nisn', $this->input->post('nisn'));
        $this->db->update('ppdb' , $data);
    }
}
