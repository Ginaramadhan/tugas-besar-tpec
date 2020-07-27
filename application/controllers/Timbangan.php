<?php

class Timbangan extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Timbangan_model');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = 'Data Penimbangan';
        $data['timbang'] = $this->Timbangan_model->getTimbang();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Timbangan/Index', $data);
        $this->load->view('Templates2/Footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Timbangan';
        $data['imun'] = $this->Timbangan_model->getImun();
        $data['vitamin'] = $this->Timbangan_model->getVit();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Timbangan/Tambah', $data);
        $this->load->view('Templates2/Footer');
    }
    public function proses_tambah()
    {
        $Id_anak = $this->input->post('Id_anak');
        $Tanggal_penimbangan = $this->input->post('Tanggal_penimbangan');
        $Berat_timbangan = $this->input->post('Berat_timbangan');
        $Tinggi_timbangan = $this->input->post('Tinggi_timbangan');
        $Usia_timbangan = $this->input->post('Usia_timbangan');
        $Kode_imunisasi = $this->input->post('Kode_imunisasi');
        $Kode_vitamin = $this->input->post('Kode_vitamin');

        $data = [
            'Id_anak'=> $Id_anak,
            'Tanggal_penimbangan'=> $Tanggal_penimbangan,
            'Berat_timbangan'=> $Berat_timbangan,
            'Tinggi_timbangan'=> $Tinggi_timbangan,
            'Usia_timbangan'=> $Usia_timbangan,
            'Kode_imunisasi'=> $Kode_imunisasi,
            'Kode_vitamin'=> $Kode_vitamin
        ];

        $this->Timbangan_model->insert_timbangan($data);
        $this->session->set_flashdata('flash', 'Ditambah');
        redirect('Timbangan');
    }

    public function hapus($id)
   {
       $this->Timbangan_model->hapusTimbangan($id);
       $this->session->set_flashdata('flash', 'Dihapus');
       redirect('Timbangan');
   }

   public function detail($id)
   {
        $data['judul'] = 'Detail Data Timbangan Anak dan Balita'; 
        $data['timbangan'] = $this->Timbangan_model->getDetail($id)[0];
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Timbangan/Detail', $data);
        $this->load->view('Templates2/Footer');
   }

   public function edit()
    {
        $data['judul'] = 'Edit Data Timbangan';
        $data['timbangan'] = $this->Timbangan_model->getDetail($this->uri->segment(3))[0];
        // var_dump($data['timbangan']);
        // die();
        $data['imun'] = $this->Timbangan_model->getImun();
        $data['vitamin'] = $this->Timbangan_model->getVit();
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Timbangan/Edit', $data);
        $this->load->view('Templates2/Footer');
    }

    public function proses_edit() 
    {   
        $kode_timbangan = (int)$this->uri->segment(3);
        $Id_anak             = $this->input->post('Id_anak');
        $Tanggal_penimbangan = $this->input->post('Tanggal_penimbangan');
        $Berat_timbangan  = $this->input->post('Berat_timbangan');
        $Tinggi_timbangan = $this->input->post('Tinggi_timbangan');
        $Usia_timbangan = $this->input->post('Usia_timbangan');
        $Kode_imunisasi = $this->input->post('Kode_imunisasi');
        $Kode_vitamin   = $this->input->post('Kode_vitamin');

        $data = [
            'Id_anak'=> $Id_anak,
            'Tanggal_penimbangan'=> $Tanggal_penimbangan,
            'Berat_timbangan'    => $Berat_timbangan,
            'Tinggi_timbangan'   => $Tinggi_timbangan,
            'Usia_timbangan'     => $Usia_timbangan,
            'Kode_imunisasi'     => (int)$Kode_imunisasi,
            'Kode_vitamin'       => (int)$Kode_vitamin
        ];

        $this->Timbangan_model->update($data, $kode_timbangan);
        $this->session->set_flashdata('flash', 'Dirubah');
        redirect('Timbangan');
    }

}

