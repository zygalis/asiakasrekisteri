<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('asiakas_model');
        }

	public function index()
	{
            $data['asiakkaat'] = $this->asiakas_model->hae_kaikki();
            $this->load->view('asiakkaat_view', $data);
	}
}
