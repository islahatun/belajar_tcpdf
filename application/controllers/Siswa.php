<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{


    public function index()
    {
        $this->db->get('siswa');
        $this->load->view('templete/header');
        $this->load->view('siswa/daftar');
        $this->load->view('templete/footer');
    }
    public function tambah()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'nisn' => $this->input->post('nisn'),
            'nama' => $this->input->post('nama')
        ];
        $this->db->insert('m_siswa', $data);
        redirect('Siswa');
    }
}
