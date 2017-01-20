<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kayttaja extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('kayttaja_model');
            $this->load->library('encrypt');
            $this->load->library('form_validation');
        }

	public function index() {

            $data['main_content'] = 'kirjaudu_view';
            $this->load->view('template', $data);
	}
        public function rekisteroityminen(){
            $data['main_content'] = 'rekisteroidy_view';
            $this->load->view('template', $data);
        }
       public function rekisteroidy(){
           $data = array(
                'id'        =>  $this->input->post('id'),
                'email'     =>  $this->input->post('email'),
                'salasana'  =>  $this->encrypt->encode($this->input->post('salasana'))    
            );
           
           $this->form_validation->set_rules('email','email', 'required|valid_email');
           $this->form_validation->set_rules('salasana','salasana', 'required|min_length[8]');
           $this->form_validation->set_rules('salasana2', 'toista salasana', 'matches[salasana]');
           
           if($this->form_validation->run() === TRUE){
               
                $this->kayttaja_model->lisaa($data);
                redirect('kayttaja');
            }
            else{
                $data['main_content'] = 'rekisteroidy_view';
                $this->load->view('template',$data);
            }
       }
}