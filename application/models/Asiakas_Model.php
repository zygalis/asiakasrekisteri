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
    public function lisaa($data){
        $this->db->insert('asiakas',$data);
        return $this->db->insert_id();  
    }
    
}