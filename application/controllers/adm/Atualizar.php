<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Atualizar extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('crud');
        if (!$this->session->userdata('nome')):
            redirect('inicial?exe=restrito');
        endif;
    }

    public function index() {

        $idCurso = "id_curso={$this->input->get('detalhes')}";
        $dados['dados'] = $this->crud->ler('cursos', $idCurso);
        
        $content = $this->load->view('adm/atualizar', $dados, true);
        $this->page->loadPage($content);
    }

    
    public function update(){

        $curso_id = $this->input->get('id');
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

            redirect("adm/atualizar?detalhes={$curso_id}&exe=erro");

        } else{
            $set = array(
                'curso'  => $this->input->post('curso'),
                'turnos' => $this->input->post('turnos'),
                'periodos' => $this->input->post('periodos'),
                'valor' => $this->input->post('valor'),
                'descricao' => $this->input->post('descricao'),
                'perfil'=> $this->input->post('perfil')
            );

            $where = "id_curso= {$curso_id}";
            $result = $this->crud->atualizar('cursos', $set, $where);

            if($result){

                redirect("adm/atualizar?detalhes={$curso_id}&exe=sucesso");
            }else{

                redirect("adm/atualizar?detalhes={$curso_id}&exe=erroatualizar");
            }
        }
    }
    
    
    public function contato() {

        $this->page->loadPage('adm/contato');
    }
}
