<?php

class Gizi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gizi_model');
    }
    public function index()
    {
        $data['judul'] = 'Data Pengecekan Gizi Anak dan Balita';
        $data['cekgizi'] = $this->Gizi_model->getGizi();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Gizi/Index', $data);
        $this->load->view('Templates2/Footer');
    }
    
    public function tambah()
    {
        $data['judul'] = 'Menambah Data Perhitungan Gizi';
        $data['anak'] = $this->Gizi_model->getAnak();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Gizi/Tambah', $data);
        $this->load->view('Templates2/Footer');
    }

    public function hitungbmi()
    {
        $Id_anak = $this->input->post('Id_anak');
        $Tanggal_cel = $this->input->post('Tanggal_penimbangan');
        $Berat_gizi = $this->input->post('Berat_timbangan');
        $Tinggi_gizi = $this->input->post('Tinggi_timbangan');
        $hasil = $this->input->post('Usia_timbangan');

        $data = [
            'Id_anak'=> $Id_anak,
            'Tanggal_cek'=> $Tanggal_penimbangan,
            'Berat_gizi'=> $Berat_timbangan,
            'Tinggi_gizi'=> $Tinggi_timbangan,
            'Hasil'=> $Usia_timbangan
        ];

        $this->Timbangan_model->insert_timbangan($data);
        $this->session->set_flashdata('flash', 'Ditambah');
        redirect('Timbangan');
    }


    
}