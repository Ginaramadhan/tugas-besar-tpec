<?php

class Manfaat extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Manfaat_model');
    }

    public function index()
    {
        $data['judul'] = 'Manfaat Posyandu';
        $data['manfaat']=$this->Manfaat_model->getArtikel();
        // var_dump($data['home']);
        // die();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Manfaat/Index', $data);
        $this->load->view('Templates/Footer');
    }
    
    public function edit(){

        $data['judul'] = 'Edit Artikel';
        $data['artikel'] = $this->Manfaat_model->getArtikelById($this->uri->segment(3))[0];
        
        $this->load->view('Templates/Header', $data);
        $this->load->view('Manfaat/Edit', $data);
        $this->load->view('Templates/Footer');
    }

    public function proces_edit()
    {
        $id = $this->input->post('Kode_artikel');
        $data = [
            'Judul_artikel' => $this->input->post('judul_artikel'),
            'Isi_artikel' => $this->input->post('Isi_artikel')
        ];
        $this->Manfaat_model->update_artikel($data, $id);
        redirect('Manfaat');
    }

}
