<?php

class Manfaat_model extends CI_Model{
 
    function getArtikel(){
        
        $this->db->select('*');
        $this->db->from('artikel');
        $kode_artikel = array(5,6);
        $this->db->where_in('Kode_artikel', $kode_artikel);
        return $this->db->get()-> result();
    }

    function getArtikelById($id) {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->where('Kode_artikel', $id);
        return $this->db->get()-> result();
    }

    function update_artikel($data, $id) {
        $this->db->where('Kode_artikel', $id);
        $this->db->update('artikel', $data);
    }
 
}