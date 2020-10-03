<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class educacao extends CI_Controller
{
    public function index($id)
    {
        $this->load->model("educacao_model");
        $educacoes = $this->educacao_model->buscaTodos();
        $educacao = $educacoes[$id-1];
        $caminhoCss = array("path" => "includes/educacao.css");
        $cont=0;
        $diretorio = "./img/educacao/{$educacao['pasta']}";
        $ponteiro  = opendir($diretorio);
        while ($nome_itens = readdir($ponteiro)) {
            if (!(is_dir($nome_itens))){
                $cont++;
            }
        }
        $dados = array(
            "caminhoCss" => $caminhoCss,
            "educacao" => $educacao,
            "qtdArquivos" => $cont,
            "diretorio" => $diretorio,
            "educacoes" => $educacoes
        );
        $this->load->viewTemplate("educacao/educacao.php", $dados);
    }
}