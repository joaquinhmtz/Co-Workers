<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index() {
        
        $this->load->view('syp/header');
        $this->load->view('syp/inicio');
        $this->load->view('syp/footer');
        
        
    }
    
    
    
    
}

?>
