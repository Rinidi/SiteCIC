<?php

class Infra_model extends CI_Model
{
    public function buscaTodos()
    {
        return $this->db->get("infra")->result_array();
    }
    public function buscaPorId($id)
    {
        return $this->db->get_where("infra", array("id" => $id))->row_array();
    }
}