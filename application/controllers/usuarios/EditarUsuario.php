<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditarUsuario extends CI_Controller{

    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('email')):
            redirect('inicial?exe=restrito');
        endif;
        $this->load->model('crud');
    }

    public function index(){
        
        $user_id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
        $where = "id={$this->db->escape($user_id)}";
        $dados['usuarios'] = $this->crud->ler('usuarios', $where);
        
        $content = $this->load->view('usuarios/editar', $dados, true);
        $this->page->loadPage($content);
    }

    public function update(){

        $user_id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
        $rules = array(
            array('field' => 'nome', 'label' => 'nome', 'rules' => 'required|ucwords'),
            array('field' => 'email', 'label' => 'email', 'rules' => 'required|strtolower|valid_email'), //'|strtolower|is_unique[usuarios.email]
            array('field' => 'senha', 'label' => 'senha', 'rules' => 'required'),
            array('field' => 'nivel', 'label' => 'nivel', 'rules' => 'required'),
            array('field' => 'status', 'label' => 'status', 'rules' => 'required')
        );
        $this->form_validation->set_rules($rules);
        if(!$this->form_validation->run()){
            redirect("usuarios/editarusuario?id={$user_id}&exe=erro");
        } else{
            $user_id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
            $set = array(
                'nome'  => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'senha' => md5($this->input->post('senha')),
                'nivel' => $this->input->post('nivel'),
                'status'=> $this->input->post('status')
            );
            $where = "id = {$user_id}";
            $result = $this->crud->atualizar('usuarios', $set, $where);
            if($result){
                redirect("usuarios/editarusuario?id={$user_id}&exe=sucesso");
            }else{
                redirect("usuarios/editarusuario?id={$user_id}&exe=erroatualizar");
            }
        }
    }
}
