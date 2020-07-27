<?php

class Gizi_model extends CI_Model{
    public function getGizi()
    {
        $this->db->select('*');
        $this->db->from('gizi');
        $this->db->join('anak', 'anak.Id_anak = gizi.id_anak');
       return $this->db->get()->result_array();
    }

    public function getAnak()
    {
        return $this->db->get('anak');
    }

    public function insert_gizi($data)
    {
        $this->db->insert('gizi',$data);
    
    }
}