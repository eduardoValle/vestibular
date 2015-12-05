<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {

    function __construct() {
        parent::__construct();

        $this->load->database();
    }

    /**
     * Pesquisa na tabela passada os valores seguindo as restrições dos parâmetros.
     * @param string $tabela Nome da tabela onde será feito a inserção de dados.
     * @param string $where  É a condição e deve estar no formato 'id = 1'.
     * @param string $limit  É o limite mámido de linhas que irá retornar.
     * @param string $offset 
     * @return array um array com o resultado da pesquisa. 
     */
    public function ler($tabela, $where = NULL, $limit = NULL, $offset = NULL) {

        $query = $this->db->get_where($tabela, $where, $limit, $offset);
        return $query->result();
    }

    /**
     * Pesquisa agrupando tabelas os valores seguindo as restrições dos parâmetros.
     * @param string $tabela a tabela principal da consulta.
     * @param string $join a tabela em que iremos fazer o join.
     * @param string $cond condição do join, dever o nome databela e a coluna separedos por ponto ex.: 'tickets.status_id = tickets_status.status_id'.
     * @param string $tipoJoin tipo de join (inner, left, right).
     * @param string $where É a condição e deve estar no formato 'id = 1'.
     * @return array um array com o resultado da pesquisa.
     */
    public function ler_join($tabela, $join, $cond, $tipoJoin, $where = NULL) {

        $this->db->select('*');
        $this->db->from($tabela);
        $this->db->join($join, $cond, $tipoJoin);
        if ($where) {
            $this->db->where($where);
        }
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Insere na tabela passada com os valores indicados.
     * @param string $tabela Nome da tabela onde será feito a inserção de dados.
     * @param array  $valores é um array informando as colunas e os valores e ser inseridos ex.: array('nomeColuna' => 'valor').
     * @return boolean TRUE se ocoreu a inserção dos dados.
     */
    public function inserir($tabela, $valores) {

        return $this->db->insert($tabela, $valores);
    }

    /**
     * Insere na tabela passada com os valores indicados.
     * @param string $tabela Nome da tabela onde será feito a inserção de dados.
     * @param array  $valores é um array informando as colunas e os valores e ser inseridos ex.: array('nomeColuna' => 'valor').
     * @return int ID da conteudo adicionado.
     */
    public function inserir_retorna_id($tabela, $valores) {

        $this->db->insert($tabela, $valores);
        return $this->db->insert_id();
    }

    /**
     * Atualiza a tabela passada com os valores indicados.
     * @param string $tabela É o nome da tabema que vamos atualizar.
     * @param string $where  É a condição e deve estar no formato 'id = 1'.
     * @param array  $set são os valores novos que vamos atribuir e devem no formato array ex.: array('nomeColuna' => 'valor').
     * @return boolean TRUE se ocoreu a atualização.
     */
    public function atualizar($tabela, $where, $set) {

        return $query = $this->db->update($tabela, $where, $set);
    }

    /**
     * Exclui um arquivo da tabela passada segundo a condição passada.
     * @param type $tabela Nome da tabela que vamos realizar a exclusão
     * @param type $where  Condição para se realizar a exclusão. Deve estar no formato array ex.: array('nomeColuna' => 'valor').
     * @return boolean TRUE se ocoreu a atualização. 
     */
    public function excluir($tabela, $where) {

        return $query = $this->db->delete($tabela, $where);
    }
}
