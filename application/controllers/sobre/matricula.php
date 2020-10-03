<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matricula extends CI_Controller
{
    public function index()
    {
        $educacoes = $this->educacao_model->buscaTodos();
        $caminhoCss = array("path" => "includes/sobre/matricula.css");
        $dados = array(
            "caminhoCss" => $caminhoCss,
            "educacoes" => $educacoes
        );
        $this->load->viewTemplate("sobre/matricula.php", $dados);
    }
}