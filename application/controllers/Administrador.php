<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        if ($this->session->userdata('nome')):
            redirect('adm/inicio');
        endif;
    }

    public function index() {

        $this->load->view('administrador');
    }

    public function login() {

        $rules = array(
            array('field' => 'email', 'label' => 'NOME', 'rules' => 'required'),
            array('field' => 'senha', 'label' => 'SENHA', 'rules' => 'required')
        );

        $this->form_validation->set_rules($rules);

        if (!$this->form_validation->run()) {

            redirect('administrador?exe=erro');
        } else {

            $this->load->model('user');
            $dados = array(
                'email' => $this->input->post('email'),
                // 'senha' => md5($this->input->post('senha'))
                'senha' => $this->input->post('senha')
            );
            $user = $this->user->verificaLogin($dados['email'], $dados['senha']);
            
            if ($user) {
                $this->session->set_userdata(array(
                    'id'    => $user[0]->id,
                    'nome'  => $user[0]->nome,
                    'email' => $user[0]->email,
                    'senha' => $user[0]->senha,
                    'nivel' => $user[0]->nivel
                ));
                redirect('adm/inicio');
            } else {
                redirect('administrador?exe=errosenha');
            }
        }
    }
}
