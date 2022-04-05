<?php

class Admin extends CI_Controller
{
    function index(){
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/footer');
    }
}

