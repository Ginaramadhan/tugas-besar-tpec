<?php

class Visi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Visi_model');
    }

    public function index()
    {
        $data['judul'] = 'Visi dan Misi Posyandu';
        $data['visi']=$this->Visi_model->getArtikel();
        // var_dump($data['home']);
        // die();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Visi/Index', $data);
        $this->load->view('Templates/Footer');
    }
    
    public function edit(){

        $data['judul'] = 'Edit Artikel';
        $data['artikel'] = $this->Visi_model->getArtikelById($this->uri->segment(3))[0];
        
        $this->load->view('Templates/Header', $data);
        $this->load->view('Visi/Edit', $data);
        $this->load->view('Templates/Footer');
    }

    public function proces_edit()
    {
        $id = $this->input->post('Kode_artikel');
        $data = [
            'Judul_artikel' => $this->input->post('judul_artikel'),
            'Isi_artikel' => $this->input->post('Isi_artikel')
        ];
        $this->Visi_model->update_artikel($data, $id);
        redirect('Manfaat');
    }

}
