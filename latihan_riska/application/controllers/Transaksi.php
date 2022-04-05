<?php

class Transaksi extends CI_Controller{

public function index()
        {
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/footer');
        $this->load->view('content_admin/transaksi');

    }
    
}
