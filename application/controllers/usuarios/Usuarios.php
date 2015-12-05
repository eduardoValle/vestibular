<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{

    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('email')):
            redirect('inicial?exe=restrito');
        endif;
        $this->load->model('crud');
    }

    public function index(){

        $dados['usuarios'] = $this->crud->ler('usuarios');
        $content = $this->load->view('usuarios/usuario', $dados, true);
        $this->page->loadPage($content);
    }


    public function inativar(){

        $id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
        $where = "id={$id}";
        $set = array('status' => 0);
        $result = $this->crud->atualizar('usuarios', $set, $where);

        if($result){
            redirect('usuarios/usuarios?inativar=sucesso');
        }else{
            redirect('usuarios/usuarios?inativar=erro');
        }
    }

    public function ativar(){

        $id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
        $where = "id={$id}";
        $set = array('status' => 1);
        $result = $this->crud->atualizar('usuarios', $set, $where);

        if($result){
            redirect('usuarios/usuarios?inativar=sucesso');
        }else{
            redirect('usuarios/usuarios?inativar=erro');
        }
    }
}
