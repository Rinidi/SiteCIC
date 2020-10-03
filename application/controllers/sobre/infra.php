<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Infra extends CI_Controller
{
    public function index()
    {
        $this->load->model("infra_model");
        $areas = $this->infra_model->buscaTodos();
        $educacoes = $this->educacao_model->buscaTodos();
        $caminhoCss = array("path" => "includes/sobre/infra.css");
        $dados = array(
            "caminhoCss" => $caminhoCss,
            "areas" => $areas,
            "educacoes" => $educacoes
        );
        $this->load->viewTemplate("sobre/infra.php", $dados);
    }

    public function area($id)
    {
        $this->load->model("infra_model");
        $area = $this->infra_model->buscaPorId($id);
        $educacoes = $this->educacao_model->buscaTodos();
        $caminhoCss = array("path" => "includes/sobre/infra.css");
        $cont=0;
        $diretorio = "./img/infraestrutura/{$area['pasta']}";
        $ponteiro  = opendir($diretorio);
        while ($nome_itens = readdir($ponteiro)) {
            if (!(is_dir($nome_itens))){
                $cont++;
            }
        }
        $dados = array(
            "caminhoCss" => $caminhoCss,
            "area" => $area,
            "qtdArquivos" => $cont,
            "diretorio" => $diretorio,
            "educacoes" => $educacoes
        );
        $this->load->viewTemplate("sobre/area.php", $dados);

    }
}