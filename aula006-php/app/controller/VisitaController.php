<?php

namespace Ifba\Visitas\controller;

class VisitaController{
    
    public function index()
    {
        require "./app/view/inicial.php";
    }

    public function mostraVisitas()
    {
        require "./app/view/mostra.php";
    }

    public function salvar()
    {
        $visitante = new \Ifba\Visitas\model\Visitante;
        $visitante->setNome($_POST["nome"] ?? "");
        $visitante->setData();

        $dao = new \Ifba\Visitas\model\VisitanteDao();
        $dao->inserir($visitante);
    }

}
