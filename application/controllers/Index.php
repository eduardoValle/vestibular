<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('crud');
    }

    public function index() {
     
        $dados['dados'] = $this->crud->ler('cursos');

        $content = $this->load->view('index', $dados, true);
        $this->page->loadIndex($content);
    }   
}
