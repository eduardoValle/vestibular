<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('crud');
    }

    public function index() {

        $dados['cursos'] = $this->crud->ler('cursos');
        
        $content = $this->load->view('inscricao', $dados, true);
        $this->page->loadIndex($content);
    }

    public function inserir(){

        $rules = array(
            array('field' => 'nome', 'label' => 'nome', 'rules' => 'required|ucwords'),
            array('field' => 'cpf', 'label' => 'cpf', 'rules' => 'required'),
            array('field' => 'email', 'label' => 'email', 'rules' => 'required'),
            array('field' => 'opcao1', 'label' => 'primeira opção de curso', 'rules' => 'required'),
            array('field' => 'opcao2', 'label' => 'segunda opção de curso', 'rules' => 'required'),
            array('field' => 'dia_prova', 'label' => 'dia da prova', 'rules' => 'required')
        );

        $this->form_validation->set_rules($rules);
        if(!$this->form_validation->run()){

            redirect("inscricao?exe=erro");
        } else{

            $valores = array(
                'nome'  => $this->input->post('nome'),
                'cpf' => $this->input->post('cpf'),
                'email' => $this->input->post('email'),
                'opcao1' => $this->input->post('opcao1'),
                'opcao2' => $this->input->post('opcao2'),
                'dia_prova'=> $this->input->post('dia_prova')
            );
            $result = $this->crud->inserir('inscritos', $valores);

            if($result){

                redirect("inscricao?exe=sucesso");
            }else{

                redirect("inscricao?exe=errocadastrar");
            }
        }
    }
}
