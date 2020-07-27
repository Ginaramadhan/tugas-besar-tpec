<?php

class Dataimunisasi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dataimunisasi_model');
    }
    public function index()
    {
        $data['judul'] = 'Data Vaksin Imunisasi ';
        $data['imunisasi'] = $this->Dataimunisasi_model->getDataimunisasi();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Dataimunisasi/Index', $data);
        $this->load->view('Templates2/Footer');
    }

    public function tambah()
    {
        $data['judul'] = ' Tambah Data Anak';
        
        $this->form_validation->set_rules('Jenis_imunisasi', 'Jenis Vaksin Imunisasi', 'required');
        $this->form_validation->set_rules('Usia_wajib', 'Usia Wajib', 'required');
        
        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Dataimunisasi/tambah');
        $this->load->view('Templates2/Footer');
        } else {
           $this->Dataimunisasi_model->tambahVaksin();
           $this->session->set_flashdata('Flash', 'Ditambahkan');
           redirect('Dataimunisasi');
        }
    }

   public function hapus($id)
   {
       $this->Dataimunisasi_model->hapusDataimunisasi($id);
       $this->session->set_flashdata('Flash', 'Dihapus');
       redirect('Dataimunisasi');
   }

   public function detail($id)
   {
        $data['judul'] = 'Detail Data anak dan balita'; 
        $data['imunisasi'] = $this->Dataimunisasi_model->getDetail($id);
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Dataimunisasi/Detail', $data);
        $this->load->view('Templates2/Footer');
   }

   public function edit($id)
   {
       $data['judul'] = ' Edit Data Vaksin';
       $data['imunisasi'] = $this->Dataimunisasi_model->getDetail($id);
       $this->form_validation->set_rules('Jenis_imunisasi', ' Jenis Vaksin', 'required');
       $this->form_validation->set_rules('Usia_wajib', 'Usia Wajib', 'required');
       if( $this->form_validation->run() == FALSE) 
       {
       $this->load->view('Templates2/Header', $data);
       $this->load->view('Dataimunisasi/Edit', $data);
       $this->load->view('Templates2/Footer');
       } else {
          $this->Dataimunisasi_model->ubahVaksin();
          $this->session->set_flashdata('Flash', 'Dirubah');
          redirect('Dataimunisasi');
       }
   }
}