<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->session->userdata('nome')):
            redirect('inicial?exe=restrito');
        endif;
    }

    public function index() {

        $content = $this->load->view('formulario/cadastrar', "", true);
        $this->page->loadPage($content);
    }

    public function contato() {

        $this->page->loadPage('formulario/contato');
    }
}
