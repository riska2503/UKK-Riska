<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 


{

     
  public function __construct()
  {
          parent::__construct();
      $this->load->model('P_ppdb');

          // Your own constructor code
  }
  public function index()
{
  $data['ppdb'] = $this->P_ppdb->SemuaData();
  $this->load->view('templates/header');
  $this->load->view('templates/sidebar');
  $this->load->view('templates/topbar');
  $this->load->view('templates/index', $data);
  $this->load->view('templates/footer');
 }

  public function tambah_data()
{
  $data['ppdb'] = $this->P_ppdb->SemuaData();
  $this->load->view('templates/header');
  $this->load->view('templates/sidebar');
  $this->load->view('templates/topbar');
  $this->load->view('Home/tambah_data',$data);
  $this->load->view('templates/footer');

 }

 public function proses_tambah_data() 
 {
   
    $this->P_ppdb->proses_tambah_data();
    redirect('Home');
 }

 public function hapus_data($nisn)
 {
     $this->P_ppdb->hapus_data($nisn);
     redirect('Home');
 }

 public function edit_data($nisn)
 {
     $data['ppdb'] = $this->P_ppdb->ambil_nisn_peserta($nisn);
     $this->load->view('templates/header');
     $this->load->view('templates/sidebar');
     $this->load->view('templates/topbar');
     $this->load->view('Home/edit_data',$data);
     $this->load->view('templates/footer');
 }
 public function proses_edit_data()
 {
     $this->P_ppdb->proses_edit_data($nisn);
     redirect('Home');
 }

}