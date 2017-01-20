<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('rekisteroidy_model');
            $this->load->library('form_validation');
        }

	public function index() {
            
            $data['main_content'] = 'rekisteroidy_view';
            $this->load->view('template', $data);
	}
        public function lisaa() {
            $data = array(
              'id'          =>      '',
              'email'     =>      '',
              'salasana'    =>      ''
              
            );
            
            $data['main_content'] = 'rekisteroidy_view';
            $this->load->view('template',$data);
            
        }
        
}