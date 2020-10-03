<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader
{
    public function viewTemplate($nome, $dados = array())
    {
        $this->view("templates/cabecalho.php", $dados);
        $this->view($nome, $dados);
        $this->view("templates/rodape.php", $dados);
    }
}
