<?php

namespace Ifba\Visitas\controller;

use \Ifba\Visitas\model\entidades\Visitante;
use \Ifba\Visitas\model\BD\VisitanteDao;
class VisitaController{
    
    public function index()
    {
        $dados = [
            'titulo' => "Livro de Visitas - 2º ano Verpertino"
        ];
        view("inicial",$dados);
    }

    public function mostraVisitas()
    {
        $dao = new VisitanteDao();
        $visitantes = $dao->buscarTodos();
        $dados = [
            'titulo' => "Livro de Visitas - 2º ano Verpertino",
            'visitantes' => $visitantes
        ];
        view("mostra",$dados);
    }

    public function salvar()
    {
        $visitante = new Visitante;
        $visitante->setNome($_POST["nome"] ?? "");
        $visitante->setData();

        $dao = new VisitanteDao();
        $dao->inserir($visitante);
    }

}
