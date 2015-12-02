<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->load->view('index');
    }

    public function login() {

        $rules = array(
            array('field' => 'nome', 'label' => 'NOME', 'rules' => 'required'),
        );

        $this->form_validation->set_rules($rules);

        if (!$this->form_validation->run()) {

            redirect('inicial?exe=erro');
        } else {

            if ($this->input->post('nome')) {
                $this->session->set_userdata(array(
                    'nome' => $this->input->post('nome'),
                ));
                redirect('formulario/inicio');
            } else {
                redirect('inicial');
            }
        }
    }
}
