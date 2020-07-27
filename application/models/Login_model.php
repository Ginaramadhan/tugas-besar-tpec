<?php

class Login_model extends CI_Model{
 
    function getAkun($username){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where_in('Username', $username);
        return $this->db->get()-> result();
    }
 
}