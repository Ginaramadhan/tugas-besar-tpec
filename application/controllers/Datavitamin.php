<?php

class Datavitamin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datavitamin_model');
    }
    public function index()
    {
        $data['judul'] = 'Data Vitamin ';
        $data['vitamin'] = $this->Datavitamin_model->getDatavitamin();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Datavitamin/Index', $data);
        $this->load->view('Templates2/Footer');
    }

    public function tambah()
    {
        $data['judul'] = ' Tambah Data Vitamin';
        
        $this->form_validation->set_rules('Jenis_vitamin', 'Jenis Vitamin', 'required');
        $this->form_validation->set_rules('Usia_wajib_vitamin', 'Usia Wajib', 'required');
        
        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Datavitamin/tambah');
        $this->load->view('Templates2/Footer');
        } else {
           $this->Datavitamin_model->tambahDatvit();
           $this->session->set_flashdata('flash', 'Ditambahkan');
           redirect('Datavitamin');
        }
    }

    public function hapus($id)
    {
        $this->Datavitamin_model->hapusDatavitamin($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Datavitamin');
    }

    public function detail($id)
    {
         $data['judul'] = 'Detail Data anak dan balita'; 
         $data['vitamin'] = $this->Datavitamin_model->getDetail($id);
         $this->load->view('Templates2/Header', $data);
         $this->load->view('Datavitamin/Detail', $data);
         $this->load->view('Templates2/Footer');
    }

    public function edit($id)
   {
       $data['judul'] = ' Edit Data Vitamin';
       $data['vitamin'] = $this->Datavitamin_model->getDetail($id);
       $this->form_validation->set_rules('Jenis_vitamin', ' Jenis Vitamin', 'required');
       $this->form_validation->set_rules('Usia_wajib_vitamin', 'Usia Wajib', 'required');
       if( $this->form_validation->run() == FALSE) 
       {
       $this->load->view('Templates2/Header', $data);
       $this->load->view('Datavitamin/Edit', $data);
       $this->load->view('Templates2/Footer');
       } else {
          $this->Datavitamin_model->ubahVitamin();
          $this->session->set_flashdata('flash', 'Dirubah');
          redirect('Datavitamin');
       }
   }
}
