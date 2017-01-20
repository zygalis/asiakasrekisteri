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
  
}
