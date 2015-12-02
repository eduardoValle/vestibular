<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->session->userdata('nome')):
            redirect('inicial?exe=restrito');
        endif;
    }

    public function index() {

        $dados['dados'] = array(
            array('curso' => 'Engenharia de computação', 'turno' => 'Noite', 'periodo' => '10', 'valor' => '690,00'),
            array('curso' => 'Engenharia Mecanica', 'turno' => 'Noite', 'periodo' => '10', 'valor' => '690,00'),
            array('curso' => 'Engenharia Minas', 'turno' => 'Noite', 'periodo' => '10', 'valor' => '690,00'),
            array('curso' => 'Medicina veterinaria', 'turno' => 'Tarde', 'periodo' => '10', 'valor' => '980,00'),
            array('curso' => 'Engenharia de Produção', 'turno' => 'Tarde', 'periodo' => '10', 'valor' => '690,00'),
            array('curso' => 'Engenharia de controle e automação', 'turno' => 'Manhã', 'periodo' => '10', 'valor' => '690,00'),
            array('curso' => 'Enfermagemo', 'turno' => 'Manhã', 'periodo' => '10', 'valor' => '780,00')
        );

        $content = $this->load->view('formulario/listar', $dados, true);
        $this->page->loadPage($content);
    }

    /**
     * <b>Logoff:</b> Responsável pelo logoff do sismtema. Esse método simplesmente destroi a Session.
     */
    public function logoff() {
        $this->session->sess_destroy();
        redirect('inicial?exe=logoff');
    }
}
