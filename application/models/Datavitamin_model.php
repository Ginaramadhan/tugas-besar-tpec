<?php

class Datavitamin_model extends CI_model{
    public function getDatavitamin()
    {
        return $this->db->get('vitamin')->result_array();
    }

    public function tambahDatvit()
    {
        $data = [
            "Kode_vitamin" => $this->input->post('Kode_vitamin', true),
            "Jenis_vitamin" => $this->input->post('Jenis_vitamin', true),
            "Usia_wajib_vitamin" => $this->input->post('Usia_wajib_vitamin', true)

        ];
        $this->db->insert('vitamin', $data);
    }

    public function hapusDatavitamin($id)
    {
        $this->db->where('Kode_vitamin', $id);
        $this->db->delete('vitamin');
    }

    public function getDetail($id)
    {
        return $this->db->get_where('vitamin', ['Kode_vitamin' => $id])->row_array();
    }

    public function ubahVitamin()
    {
        $data = [
            "Jenis_vitamin" => $this->input->post('Jenis_vitamin', true),
            "Usia_wajib_vitamin" => $this->input->post('Usia_wajib_vitamin', true),

        ];
        $this->db->where('Kode_vitamin', $this->input->post('id'));
        $this->db->update('vitamin', $data);
    }
}