<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('asiakas_model');
        }

	public function index() {
            $data['asiakkaat'] = $this->asiakas_model->hae_kaikki();
            $data['main_content'] = 'asiakkaat_view';
            $this->load->view('template', $data);
	}
        public function lisaa() {
            
            $data['main_content'] = 'asiakas_view';
            $this->load->view('template',$data);
            
        }
        public function tallenna(){
            $data = array(
                'etunimi' => $this->input->post('etunimi'),
                'sukunimi' => $this->input->post('sukunimi'),
                'osoite' => $this->input->post('osoite'),
                'postitmp' => $this->input->post('postitmp'),
                'postinro' => $this->input->post('postinro')
            );
            $this->asiakas_model->lisaa($data);
            redirect('asiakas/index');
        }
        public function poista($id){
            $this->asiakas_model->poista(intval($id));
//            $this->index();
            redirect('asiakas/index');
        }
}
