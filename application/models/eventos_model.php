<?php

class Eventos_model extends CI_Model
{
    public function buscaTodos()
    {
        $this->db->order_by('data', 'DESC');
        return $this->db->get("eventos")->result_array();
    }

    public function buscaPorId($id)
    {
        return $this->db->get_where("eventos", array("id" => $id))->row_array();
    }
    public  function buscaMaisRecentes()
    {
        $this->db->order_by('data', 'DESC');
        $this->db->limit(4);
        $this->db->from("eventos");
        return $this->db->get()->result_array();
    }
}
