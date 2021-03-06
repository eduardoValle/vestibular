<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller{

    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('email')):
            redirect('inicial?exe=restrito');
        endif;
        $this->load->model('crud');
    }

    public function index(){

        $content = $this->load->view('usuarios/Cadastro', null, true);
        $this->page->loadPage($content);
    }

    public function inserir(){

        $rules = array(
            array('field' => 'nome', 'label' => 'nome', 'rules' => 'required|ucwords'),
            array('field' => 'email', 'label' => 'email', 'rules' => 'required|strtolower|valid_email'), //'|valid_email|strtolower|is_unique[usuarios.email]
            array('field' => 'senha', 'label' => 'senha', 'rules' => 'required'), // |is_unique|min_lengh[6]'
            array('field' => 'nivel', 'label' => 'nivel', 'rules' => 'required')
        );

        $this->form_validation->set_rules($rules);

        if(!$this->form_validation->run()){

            redirect('usuarios/cadastro?exe=erro');
        } else{

            $dados = array(
                'nome'  => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'senha' => md5($this->input->post('senha')),
                'nivel' => $this->input->post('nivel'),
                'data_modificacao'  => date('d/m/Y H:i:s')
            );

            $user = $this->crud->inserir('usuarios', $dados);
            if($user){
                redirect('usuarios/cadastro?exe=sucesso');
            } else{
                redirect('usuarios/cadastro?exe=errocadastrar');
            }
        }
    }
}
