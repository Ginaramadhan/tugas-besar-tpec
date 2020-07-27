<?php

class Timbangan_model extends CI_Model{
    public function getTimbang()
    {
        $this->db->select('*');
        $this->db->from('timbangan');
        $this->db->join('anak', 'anak.Id_anak = timbangan.Id_anak');
        $this->db->join('imunisasi', 'imunisasi.Kode_imunisasi = timbangan.Kode_imunisasi');
        $this->db->join('vitamin', 'vitamin.Kode_vitamin = timbangan.Kode_vitamin');
       return $this->db->get()->result_array();
    }
    public function getImun()
    {
        return $this->db->get('imunisasi');
    }
    public function getVit()
    {
        return $this->db->get('vitamin');
    }
    
    public function insert_timbangan($data)
    {
        $this->db->insert('timbangan',$data);
    
    }
    public function hapusTimbangan($id)
    {
        $this->db->where('Kode_timbangan', $id);
        $this->db->delete('timbangan');
    }

    public function getDetail($id)
    {

        // $this->db->select('timbangan.*');
        // $this->db->from('timbangan');
        // $this->db->join('anak','timbangan.Id_anak=anak.Id_anak');
        // $this->db->join('imunisasi'. 'timbangan.Kode_imunisasi=imunisasi.Kode_imunisasi');
        // $this->db->join('vitamin'. 'timbangan.Kode_vitamin=vitamin.Kode_vitamin');
        // $this->db->where('timbangan.Kode_timbangan', $id);
        // $query = $this->db->get();
        
        $sql = "select timbangan.*, anak.*, imunisasi.*, vitamin.* from timbangan join imunisasi on imunisasi.Kode_imunisasi=timbangan.Kode_imunisasi join vitamin on vitamin.Kode_vitamin=timbangan.Kode_vitamin join anak on anak.Id_anak=timbangan.Id_anak where timbangan.Kode_timbangan=$id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function update($data, $kode_timbangan) {
        // $this->db->update('timbangan', $data, [ 'Kode_timbangan' => $kode_timbangan ]);
        $this->db->update('timbangan', $data, "Kode_timbangan = $kode_timbangan");
    }

}
