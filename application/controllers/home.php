<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $this->load->model(array("eventos_model", "publicacoes_model"));
        $educacoes = $this->educacao_model->buscaTodos();
        $noticias = $this->eventos_model->buscaMaisRecentes();
        $caminhoCss = array("path" => "index.css");
        $dados = array(
            "caminhoCss" => $caminhoCss,
            "noticias" => $noticias,
            "educacoes" => $educacoes
        );

        $this->load->viewTemplate("index.php", $dados);
    }


}