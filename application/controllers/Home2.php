<?php

class Home2 extends CI_Controller{
    public function index()
    {
        $data['judul'] = 'Halaman Utama';
        $this->load->view('Templates2/Header', $data);
        $this->load->view('Home2/Index');
        $this->load->view('Templates2/Footer');
    }
}