<?php

namespace Ifba\Visitas\controller;

class ErroController{
    
    public function erro404()
    {
        $dados = [
            'titulo' => "Livro de Visitas - 2º ano Verpertino"
        ];
        view("404",$dados);
    }

}
