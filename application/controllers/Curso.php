<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('crud');
    }

    public function index() {

        $idCurso = "id_curso={$this->input->get('detalhes')}";
        $dados['dados'] = $this->crud->ler('cursos', $idCurso);
        
        $content = $this->load->view('curso', $dados, true);
        $this->page->loadIndex($content);
    }
}
