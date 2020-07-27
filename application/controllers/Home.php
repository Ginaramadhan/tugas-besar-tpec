<?php

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $data['home']=$this->Home_model->getArtikel();
        // var_dump($data['home']);
        // die();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Home/Index', $data);
        $this->load->view('Templates/Footer');
    }
    
    public function edit(){

        $data['judul'] = 'Edit Artikel';
        $data['artikel'] = $this->Home_model->getArtikelById($this->uri->segment(3))[0];
        
        $this->load->view('Templates/Header', $data);
        $this->load->view('Home/Edit', $data);
        $this->load->view('Templates/Footer');
    }

    public function proces_edit()
    {
        $id = $this->input->post('Kode_artikel');
        $data = [
            'Judul_artikel' => $this->input->post('judul_artikel'),
            'Isi_artikel' => $this->input->post('Isi_artikel')
        ];
        $this->Home_model->update_artikel($data, $id);
        redirect('Home');
    }

    public function baca() {
        $data['artikel'] = $this->Home_model->getArtikelById($this->uri->segment(3))[0];
        $data['judul'] = $data['artikel']->Judul_artikel;

        $this->load->view('Templates/Header', $data);
        $this->load->view('Home/Baca', $data);
        $this->load->view('Templates/Footer');
    }

}
