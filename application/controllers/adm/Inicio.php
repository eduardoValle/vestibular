<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('crud');
        if (!$this->session->userdata('nome')):
            redirect('administrador?exe=restrito');
        endif;
    }

    public function index() {
     
        $dados['dados'] = $this->crud->ler('cursos');

        $content = $this->load->view('adm/listar', $dados, true);
        $this->page->loadPage($content);
    }

    public function excluir() {

        $curso_id = $this->input->get('excluir');

        if($curso_id){
            $where = "id_curso= {$curso_id}";
            $result = $this->crud->excluir('cursos', $where);

            if($result){
                redirect("adm/inicio?exe=sucesso");
            }else{
                redirect("adm/inicio?exe=erroexcluir");
            }
        }
    }

    /**
     * <b>Logoff:</b> Responsável pelo logoff do sismtema. Esse método simplesmente destroi a Session.
     */
    public function logoff() {
        $this->session->sess_destroy();
        redirect('administrador?exe=logoff');
    }
}
