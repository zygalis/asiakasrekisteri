<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas_model extends CI_Model {
    public function __construct() {
        parent::__construct();
       
    }
    public function hae_kaikki($etsi = "", $limit = NULL, $offset = NULL, $jarjestys=""){
        if(strlen($etsi)>0){
            $this->db->or_like('etunimi', $etsi);
            $this->db->or_like('sukunimi', $etsi);  
        }
        
        $this->db->limit($limit,$offset);
        
        if(strlen($jarjestys)>0){
        
            $this->db->order_by($jarjestys);
        }
        
        $query = $this->db->get('asiakas');
        return $query->result();
    }
    public function laske_asiakkaat(){
        
        return $this->db->count_all_results('asiakas');
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