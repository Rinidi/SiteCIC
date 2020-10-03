<?php

class Contato extends CI_Controller
{
    public function index()
    {
        $educacoes = $this->educacao_model->buscaTodos();
        $caminhoCss = array("path" => "includes/contato.css");
        $dados = array(
            "caminhoCss" => $caminhoCss,
            "educacoes" => $educacoes
        );
        $this->load->viewTemplate("contato.php", $dados );
    }

}