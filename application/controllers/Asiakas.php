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
            $data = array(
              'id'          =>      '',
              'etunimi'     =>      '',
              'sukunimi'    =>      '',
              'osoite'      =>      '',
              'postitmp'    =>      '',
              'postinro'    =>      ''
            );
            
            $data['main_content'] = 'asiakas_view';
            $this->load->view('template',$data);
            
        }
        public function tallenna(){
            $data = array(
                'id'        =>  $this->input->post('id'),
                'etunimi'   =>  $this->input->post('etunimi'),
                'sukunimi'  =>  $this->input->post('sukunimi'),
                'osoite'    =>  $this->input->post('osoite'),
                'postitmp'  =>  $this->input->post('postitmp'),
                'postinro'  =>  $this->input->post('postinro')
            );
            if(strlen($this->input->post('id')) === 0){
                $this->asiakas_model->lisaa($data);
            }
            else{
                $this->asiakas_model->muokkaa($data);
            }
            redirect('asiakas/index');
        }
        public function muokkaa($id){
            $asiakas = $this->asiakas_model->hae($id);
            
            if(isset($asiakas)){
                $data = array(
                    'id'          =>      $asiakas->id,
                    'etunimi'     =>      $asiakas->etunimi,
                    'sukunimi'    =>      $asiakas->sukunimi,
                    'osoite'      =>      $asiakas->osoite,
                    'postitmp'    =>      $asiakas->postitmp,
                    'postinro'    =>      $asiakas->postinro
                );
            
                $data['main_content'] = 'asiakas_view';
                $this->load->view('template',$data);          
            }
            else{
                throw new Exception('Asiakasta ei löydy!');
            }
        }
        public function poista($id){
            $this->asiakas_model->poista(intval($id));
//            $this->index();
            redirect('asiakas/index');
        }
}
