<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{


    public function index()
    {
        $data['siswa'] = $this->db->get('m_siswa')->result_array();
        $this->load->view('templete/header');
        $this->load->view('siswa/daftar', $data);
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
