<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

    function __construct(){
        parent::__construct();
        
        $this->load->database();
    }

    public function verificaLogin($email, $password){

        $sql = "SELECT * FROM `usuarios` WHERE email ='{$email}' AND senha ='{$password}' LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
