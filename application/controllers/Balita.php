<?php

class Balita extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Balita_model');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = 'Data Anak dan Balita';
        $data['anak'] = $this->Balita_model->getAllBalita();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Balita/Index', $data);
        $this->load->view('Templates2/Footer');
    }

    public function tambah()
    {
        $data['judul'] = ' Tambah Data Anak';
        
        $this->form_validation->set_rules('Nama_anak', 'Nama Anak', 'required');
        $this->form_validation->set_rules('Tanggal_lahir', 'Tanggal_lahir', 'required');
        $this->form_validation->set_rules('Berat_badan', 'Berat Badan', 'required');
        $this->form_validation->set_rules('Tinggi_badan', 'Tinggi Badan', 'required|numeric');
        $this->form_validation->set_rules('Usia', 'Usia', 'required');
        $this->form_validation->set_rules('Nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('Nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('Alamat', 'Alamat ', 'required');
        
        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Balita/tambah');
        $this->load->view('Templates2/Footer');
        } else {
           $this->Balita_model->tambahBalita();
           $this->session->set_flashdata('flash', 'Ditambahkan');
           redirect('Balita');
        }
    }

    public function hapus($id)
   {
       $this->Balita_model->hapusBalita($id);
       $this->session->set_flashdata('flash', 'Dihapus');
       redirect('Balita');
   }

   public function detail($id)
   {
        $data['judul'] = 'Detail Data anak dan balita'; 
        $data['anak'] = $this->Balita_model->getBalitadetail($id);
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Balita/Detail', $data);
        $this->load->view('Templates2/Footer');
   }

   public function edit($id)
   {
       $data['judul'] = ' Edit Data Anak';
       $data['anak'] = $this->Balita_model->getBalitadetail($id);
       $data['Jeniskelamin'] = ['Perempuan', 'Laki-Laki'];
       $data['Status'] = ['Warga Asli', 'Warga Tamu'];
       $this->form_validation->set_rules('Nama_anak', 'Nama Anak', 'required');
       $this->form_validation->set_rules('Tanggal_lahir', 'Tanggal_lahir', 'required');
       $this->form_validation->set_rules('Berat_badan', 'Berat Badan', 'required');
       $this->form_validation->set_rules('Tinggi_badan', 'Tinggi Badan', 'required');
       $this->form_validation->set_rules('Usia', 'Usia', 'required');
       $this->form_validation->set_rules('Nama_ibu', 'Nama Ibu', 'required');
       $this->form_validation->set_rules('Nama_ayah', 'Nama Ayah', 'required');
       $this->form_validation->set_rules('Alamat', 'Alamat ', 'required');
       
       if( $this->form_validation->run() == FALSE) 
       {
       $this->load->view('Templates2/Header', $data);
       $this->load->view('Balita/Edit', $data);
       $this->load->view('Templates2/Footer');
       } else {
          $this->Balita_model->ubahBalita();
          $this->session->set_flashdata('flash', 'Dirubah');
          redirect('Balita');
       }
   }
}