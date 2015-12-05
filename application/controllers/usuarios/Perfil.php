<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller{

    function __construct(){
        parent::__construct();

        $this->load->model('crud');

        if(!$this->session->userdata('email')):
            redirect('inicial?exe=restrito');
        endif;
    }

    public function index(){

        $content = $this->load->view('usuarios/perfil', null, true);
        $this->page->loadPage($content);
    }

    public function update(){

        $rules = array(
            array('field' => 'nome', 'label' => 'nome', 'rules' => 'required|ucwords'), // '|is_unique|valid_email
            array('field' => 'email', 'label' => 'email', 'rules' => 'required|strtolower|valid_email'), //'|valid_email|strtolower|is_unique[usuarios.email]
            array('field' => 'senha', 'label' => 'senha', 'rules' => 'required'), // |is_unique|min_lengh[6]'
            array('field' => 'nivel', 'label' => 'nivel', 'rules' => 'required') // |is_unique|min_lengh[6]'
        );

        $this->form_validation->set_rules($rules);
        if(!$this->form_validation->run()){

            redirect('usuarios/perfil?exe=erro');
        } else{

            $set = array(
                'nome'  => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'senha' => md5($this->input->post('senha')),
                'nivel' => $this->input->post('nivel')
            );

            $where = "id = {$this->session->userdata('id')}";
            $result = $this->crud->atualizar('usuarios', $set, $where);
            if($result){
                $this->session->set_userdata($set);
                redirect('usuarios/perfil?exe=sucesso');
            }else{
                redirect('usuarios/perfil?exe=erroatualizar');
            }
        }
    }
}
