<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Registro_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database('default');
        
    }
    
    public function creaUsuario($data){
        $this->db->insert('Usuarios',array('Nombre'=>$data['nombre'],'Usario'=>$data['usuario'],'Password'=>$data['password'],'Email'=>$data['email'],'Telefono'=>$data['telefono']));

    }

   
}
?>