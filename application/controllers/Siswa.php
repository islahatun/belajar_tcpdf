<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{


    public function index()
    {
        $this->load->view('templete/header');
        $this->load->view('siswa/daftar');
        $this->load->view('templete/footer');
    }
}
