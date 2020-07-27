<?php

class Balita_model extends CI_model{
    public function getAllBalita()
    {
        return $this->db->get('Anak')->result_array();
    }

    public function tambahBalita()
    {
        $data = [
            "Id_anak" => $this->input->post('Id_anak', true),
            "Nama_anak" => $this->input->post('Nama_anak', true),
            "Tanggal_lahir" => $this->input->post('Tanggal_lahir', true),
            "Jenis_kelamin" => $this->input->post('Jenis_kelamin', true),
            "Berat_badan" => $this->input->post('Berat_badan', true),
            "Tinggi_badan" => $this->input->post('Tinggi_badan', true),
            "Usia" => $this->input->post('Usia', true),
            "Nama_ibu" => $this->input->post('Nama_ibu', true),
            "Nama_ayah" => $this->input->post('Nama_ayah', true),
            "Alamat" => $this->input->post('Alamat', true),
            "Status" => $this->input->post('Status', true)

        ];
        $this->db->insert('anak', $data);
    }

    public function hapusBalita($id)
    {
        $this->db->where('Id_anak', $id);
        $this->db->delete('anak');
    }

    public function getBalitadetail($id)
    {
        return $this->db->get_where('anak', ['Id_anak' => $id])->row_array();
    }

    public function ubahBalita()
    {
        $data = [
            "Nama_anak" => $this->input->post('Nama_anak', true),
            "Tanggal_lahir" => $this->input->post('Tanggal_lahir', true),
            "Jenis_kelamin" => $this->input->post('Jenis_kelamin', true),
            "Berat_badan" => $this->input->post('Berat_badan', true),
            "Tinggi_badan" => $this->input->post('Tinggi_badan', true),
            "Usia" => $this->input->post('Usia', true),
            "Nama_ibu" => $this->input->post('Nama_ibu', true),
            "Nama_ayah" => $this->input->post('Nama_ayah', true),
            "Alamat" => $this->input->post('Alamat', true),
            "Status" => $this->input->post('Status', true)

        ];
        $this->db->where('Id_anak', $this->input->post('id'));
        $this->db->update('anak', $data);
    }
}