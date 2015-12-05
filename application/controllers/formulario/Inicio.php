<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('crud');
        if (!$this->session->userdata('nome')):
            redirect('inicial?exe=restrito');
        endif;
    }

    public function index() {
     
        $dados['dados'] = $this->crud->ler('cursos');

        $content = $this->load->view('formulario/listar', $dados, true);
        $this->page->loadPage($content);
    }

    public function excluir() {

        $curso_id = $this->input->get('excluir');

        if($curso_id){
            $where = "id_curso= {$curso_id}";
            $result = $this->crud->excluir('cursos', $where);

            if($result){
                redirect("formulario/inicio?exe=sucesso");
            }else{
                redirect("formulario/inicio?exe=erroexcluir");
            }
        }
    }

    /**
     * <b>Logoff:</b> Responsável pelo logoff do sismtema. Esse método simplesmente destroi a Session.
     */
    public function logoff() {
        $this->session->sess_destroy();
        redirect('inicial?exe=logoff');
    }
}
