<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inscritos extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('crud');
        if (!$this->session->userdata('nome')):
            redirect('inicial?exe=restrito');
        endif;
    }

    public function index() {

        $dados['dados'] = $this->crud->ler('inscritos');
        
        $content = $this->load->view('adm/inscritos', $dados, true);
        $this->page->loadPage($content);
    }
}
