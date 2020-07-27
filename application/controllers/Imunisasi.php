<?php

class Imunisasi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Imunisasi_model');
    }
    public function index()
    {
        $data['judul'] = 'Data Imunisasi';
        $data['imun'] = $this->Imunisasi_model->getImunisasi();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Imunisasi/Index', $data);
        $this->load->view('Templates2/Footer');
    }
    public function hapus($id)
   {
       $this->Imunisasi_model->hapusImunisasi($id);
       $this->session->set_flashdata('flash', 'Dihapus');
       redirect('Imunisasi');
   }

   public function detail($id)
   {
        $data['judul'] = 'Detail Data Timbangan Anak dan Balita'; 
        $data['imun'] = $this->Imunisasi_model->getDetail($id)[0];
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Imunisasi/Detail', $data);
        $this->load->view('Templates2/Footer');
   }

   public function edit()
   {
       $data['judul'] = 'Edit Data Timbangan';
       $data['timbangan'] = $this->Imunisasi_model->getDetail($this->uri->segment(3))[0];
       // var_dump($data['timbangan']);
       // die();
       $data['imun'] = $this->Imunisasi_model->getImun();
       $data['vitamin'] = $this->Imunisasi_model->getVit();
       $this->load->view('Templates2/Header', $data);
       $this->load->view('Imunisasi/Edit', $data);
       $this->load->view('Templates2/Footer');
   }

   public function proses_edit() 
   {   
       $kode_timbangan = (int)$this->uri->segment(3);
       $Id_anak             = $this->input->post('Id_anak');
       $Tanggal_penimbangan = $this->input->post('Tanggal_penimbangan');
       $Usia_timbangan = $this->input->post('Usia_timbangan');
       $Kode_imunisasi = $this->input->post('Kode_imunisasi');

       $data = [
           'Id_anak'=> $Id_anak,
           'Tanggal_penimbangan'=> $Tanggal_penimbangan,
           'Usia_timbangan'     => $Usia_timbangan,
           'Kode_imunisasi'     => (int)$Kode_imunisasi
       ];

       $this->Imunisasi_model->update($data, $kode_timbangan);
       $this->session->set_flashdata('flash', 'Dirubah');
       redirect('Imunisasi');
   }
}