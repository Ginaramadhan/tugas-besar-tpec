<?php

class Dataimunisasi_model extends CI_model{
    public function getDataimunisasi()
    {
        return $this->db->get('imunisasi')->result_array();
    }

    public function tambahVaksin()
    {
        $data = [
            "Jenis_imunisasi" => $this->input->post('Jenis_imunisasi', true),
            "Usia_wajib" => $this->input->post('Usia_wajib', true)

        ];
        $this->db->insert('imunisasi', $data);
    }

    public function hapusDataimunisasi($id)
    {
        $this->db->where('Kode_imunisasi', $id);
        $this->db->delete('imunisasi');
    }

    public function getDetail($id)
    {
        return $this->db->get_where('imunisasi', ['Kode_imunisasi' => $id])->row_array();
    }

    public function ubahVaksin()
    {
        $data = [
            "Jenis_imunisasi" => $this->input->post('Jenis_imunisasi', true),
            "Usia_wajib" => $this->input->post('Usia_wajib', true),

        ];
        $this->db->where('Kode_imunisasi', $this->input->post('id'));
        $this->db->update('imunisasi', $data);
    }
}