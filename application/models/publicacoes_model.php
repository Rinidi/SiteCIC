<?php

class Publicacoes_model extends CI_Model
{
    public function buscaTodos()
    {
        $this->db->order_by('data', 'DESC');
        return $this->db->get("publicacoes")->result_array();
    }
    public  function buscaMaisRecentes()
    {
        $this->db->order_by('data', 'DESC');
        $this->db->limit(2);
        $this->db->from("publicacoes");
        return $this->db->get()->result_array();
    }
}