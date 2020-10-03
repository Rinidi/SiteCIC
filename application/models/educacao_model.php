<?php

class Educacao_model extends CI_Model
{
    public function buscaTodos()
    {
        return $this->db->get("educacao")->result_array();
    }
    public function buscaPorId($id)
    {
        return $this->db->get_where("educacao", array("id" => $id))->row_array();
    }
}
