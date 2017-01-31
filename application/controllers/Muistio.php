<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muistio extends CI_Controller {
        public function __construct() {
            parent::__construct();
        }
        public function index($asiakas_id){
            echo "Asiakkaan id on $asiakas_id";
        }
}