<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kayttaja_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function lisaa($data){
        $this->db->insert('kayttaja',$data);
        return $this->db->insert_id();  
    }
    public function tarkasta_kayttaja($email,$salasana){
        $this->db->where('email',$email);
        $query = $this->db->get('kayttaja');
        
        if ($query ->num_rows() === 1){
            $purettu = $this->encrypt->decode($query->row()->salasana);
            if($salasana === $purettu){
                return $query->row();
            }
            else{
                return NULL;
            }
        }
        else{
            return NULL;
        }
    }
  
}
