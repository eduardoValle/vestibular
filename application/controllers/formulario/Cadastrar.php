<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('crud');
        if (!$this->session->userdata('nome')):
            redirect('inicial?exe=restrito');
        endif;
    }

    public function index() {

        $content = $this->load->view('formulario/cadastrar', "", true);
        $this->page->loadPage($content);
    }

    public function inserir(){

        $rules = array(
            array('field' => 'curso', 'label' => 'curso', 'rules' => 'required|ucwords'),
            array('field' => 'turnos', 'label' => 'turnos', 'rules' => 'required'),
            array('field' => 'periodos', 'label' => 'períodos', 'rules' => 'required'),
            array('field' => 'valor', 'label' => 'valor', 'rules' => 'required'),
            array('field' => 'descricao', 'label' => 'descricao', 'rules' => 'required'),
            array('field' => 'perfil', 'label' => 'perfil', 'rules' => 'required')
        );

        $this->form_validation->set_rules($rules);

        if(!$this->form_validation->run()){

            redirect("formulario/cadastrar?exe=erro");

        } else{
            $valores = array(
                'curso'  => $this->input->post('curso'),
                'turnos' => $this->input->post('turnos'),
                'periodos' => $this->input->post('periodos'),
                'valor' => $this->input->post('valor'),
                'descricao' => $this->input->post('descricao'),
                'perfil'=> $this->input->post('perfil')
            );
            $result = $this->crud->inserir('cursos', $valores);

            if($result){

                redirect("formulario/cadastrar?exe=sucesso");
            }else{

                redirect("formulario/cadastrar?exe=errocadastrar");
            }
        }
    }
    
    public function contato() {

        $this->page->loadPage('formulario/contato');
    }
}
