<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf_report');
    }

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
    public function ubah($id)
    {
        $nis = $this->input->post('nis');
        $nisn = $this->input->post('nisn');
        $nama = $this->input->post('nama');

        $this->db->set('nisn', $nisn);
        $this->db->set('nis', $nis);
        $this->db->set('nama', $nama);
        $this->db->where('id', $id);
        $this->db->update('m_siswa');
        redirect('Siswa');
    }
    public function cetak()
    {
        $this->load->view('siswa/cetak');
    }
}
