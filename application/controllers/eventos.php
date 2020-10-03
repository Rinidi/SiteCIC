<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class eventos extends CI_Controller
{
    public function index()
    {
        $this->load->model(array("eventos_model", "publicacoes_model"));
        $eventos = $this->eventos_model->buscaTodos();
        $publicacoes = $this->publicacoes_model->buscaTodos();
        $educacoes = $this->educacao_model->buscaTodos();
        $caminhoCss = array("path" => "includes/eventos/eventos.css");
        $dados = array(
            "caminhoCss" => $caminhoCss,
            "eventos" => $eventos,
            "publicacoes" => $publicacoes,
            "educacoes" => $educacoes
        );
        $this->load->viewTemplate("eventos/eventos.php", $dados);
    }
    public function evento($id)
    {
        $this->load->model("eventos_model");
        $evento = $this->eventos_model->buscaPorId($id);
        $educacoes = $this->educacao_model->buscaTodos();
        $caminhoCss = array("path" => "includes/eventos/evento.css");
        $cont=0;
        $diretorio = "./img/eventos/{$evento['pasta']}";
        $ponteiro  = opendir($diretorio);
        while ($nome_itens = readdir($ponteiro)) {
            if (!(is_dir($nome_itens))){
                $cont++;
            }
        }
        $dados = array(
            "caminhoCss" => $caminhoCss,
            "evento" => $evento,
            "qtdArquivos" => $cont,
            "diretorio" => $diretorio,
            "educacoes" => $educacoes
        );
        $this->load->viewTemplate("eventos/evento.php", $dados);
    }
}