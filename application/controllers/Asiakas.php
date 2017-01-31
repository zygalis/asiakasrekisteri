<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {
        public function __construct() {
            parent::__construct();
           
            if(!isset($_SESSION['kayttaja'])){
                redirect('kayttaja/index');
            }
            $this->load->model('asiakas_model');
            $this->load->library('form_validation');
            $this->load->library('pagination');
           
        }

	public function index() {
            
            $etsi = "";
            $etsi = $this->input->post("search");
            
            $asiakkaita_sivulla = 3;
            $jarjestys = "";
            
            if($this->session->userdata("jarjestys")){
                $jarjestys = $this->session->userdata("jarjestys");
            }
            
            if($this->uri->segment(4)){
                $jarjestys = $this->uri->segment(4);
                $this->session->get_userdata("jarjestys", $jarjestys);
            }
            $data['asiakkaat'] = $this->asiakas_model->hae_kaikki($etsi, $asiakkaita_sivulla,$this->uri->segment(3),$jarjestys);
            
            $data["sivutuksen_kohta"] = 0;
            
            if($this->uri->segment(3)){
                $data["sivutuksen_kohta"] = $this->uri->segment(3);
            }
            
            $config['base_url'] = site_url('asiakas/index');
            $config['total_rows'] = $this->asiakas_model->laske_asiakkaat();
            $config['per_page'] = $asiakkaita_sivulla;
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
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
            
            $this->form_validation->set_rules('etunimi','etunimi', 'required');
            $this->form_validation->set_rules('sukunimi','sukunimi', 'required');
            
            if($this->form_validation->run() === TRUE){
                if(strlen($this->input->post('id')) === 0){
                    $this->asiakas_model->lisaa($data);
                }
                else{
                    $this->asiakas_model->muokkaa($data);
                }
                redirect('asiakas/index');
            }
            else{
                $data['main_content'] = 'asiakas_view';
                $this->load->view('template',$data);
            }
                    
            
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
