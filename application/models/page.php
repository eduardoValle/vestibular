<?php

/**
 * Classe elaborada para fazer o carregamento do layout basico do site (Head, header e footer)
 */
class page extends CI_Model {

    public function loadPage($conteudo) {

        $content['head'] = $this->load->view('page/head', null, true);
        $content['header'] = $this->load->view('page/header', null, true);
        $content['footer'] = $this->load->view('page/footer', null, true);
        $content['content'] = $conteudo;
        $this->load->view('layout', $content);
    }

    public function loadIndex($conteudo) {

        $content['head'] = $this->load->view('page/head', null, true);
        $content['header'] = $this->load->view('page/header_index', null, true);
        $content['footer'] = $this->load->view('page/footer', null, true);
        $content['content'] = $conteudo;
        $this->load->view('layout', $content);
    }
}
