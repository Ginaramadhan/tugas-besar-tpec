<?php

class Vitamin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Vitamin_model');
    }
    public function index()
    {
        $data['judul'] = 'Data Pemberian Vitamin Anak';
        $data['vit'] = $this->Vitamin_model->getVitamin();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Vitamin/Index', $data);
        $this->load->view('Templates2/Footer');
    }

    public function hapus($id)
   {
       $this->Vitamin_model->hapusVitamin($id);
       $this->session->set_flashdata('flash', 'Dihapus');
       redirect('Vitamin');
   }

   public function detail($id)
   {
        $data['judul'] = 'Detail Data Timbangan Anak dan Balita'; 
        $data['imun'] = $this->Vitamin_model->getDetail($id)[0];
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Vitamin/Detail', $data);
        $this->load->view('Templates2/Footer');
   }

   public function edit()
   {
       $data['judul'] = 'Edit Data Timbangan';
       $data['timbangan'] = $this->Vitamin_model->getDetail($this->uri->segment(3))[0];
       // var_dump($data['timbangan']);
       // die();
       $data['imun'] = $this->Vitamin_model->getImun();
       $data['vitamin'] = $this->Vitamin_model->getVit();
       $this->load->view('Templates2/Header', $data);
       $this->load->view('Vitamin/Edit', $data);
       $this->load->view('Templates2/Footer');
   }

   public function proses_edit() 
   {   
       $kode_timbangan = (int)$this->uri->segment(3);
       $Id_anak             = $this->input->post('Id_anak');
       $Tanggal_penimbangan = $this->input->post('Tanggal_penimbangan');
       $Usia_timbangan = $this->input->post('Usia_timbangan');
       $Kode_vitamin = $this->input->post('Kode_vitamin');

       $data = [
           'Id_anak'=> $Id_anak,
           'Tanggal_penimbangan'=> $Tanggal_penimbangan,
           'Usia'     => $Usia_timbangan,
           'Kode_vitamin'     => (int)$Kode_vitamin
       ];

       $this->Vitamin_model->update($data, $kode_timbangan);
       $this->session->set_flashdata('flash', 'Dirubah');
       redirect('Vitamin');
   }
}