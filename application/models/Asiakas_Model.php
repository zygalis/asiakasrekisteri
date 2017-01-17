<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function hae_kaikki(){
        $query = $this->db->get('asiakas');
        return $query->result();
    }
    public function hae($id){
        $this->db->where('id',$id);
        $query = $this->db->get('asiakas');
        return $query->row();
    }
    public function lisaa($data){
        $this->db->insert('asiakas',$data);
        return $this->db->insert_id();  
    }
    public function muokkaa($data){
        $this->db->where('id', $data['id']);
        $this->db->update('asiakas',$data);
    }
    public function poista($id){
        // DELETE FROM asiakas WHERE id = $id
        $this->db->where('id',$id);
        $this->db->delete('asiakas');
    }
    
}