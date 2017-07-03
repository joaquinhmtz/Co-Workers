<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index() {
        $this->load->view('syp/header');
       $this->load->view('syp/registro');
        $this->load->view('syp/footer');
    }

    public function recibirDatos() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'usuario' => $this->input->post('usuario'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'telefono' => $this->input->post('telefono')
        );
        $this->Registro_model->crearUsuario($data);
    }

}
?>

