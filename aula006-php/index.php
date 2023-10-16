<?php

require "./vendor/autoload.php";

require "./config.php";
require "./util.php";

#https://dontpad.com/php-config
#Crie um arquivo na pasta aula006 chamado .htaccess
#Copie o codigo para este arquivo

$url = $_GET["url"] ?? "/";

use \Ifba\Visitas\controller\VisitaController;
use \Ifba\Visitas\controller\ErroController;


switch ($url) {
    case "/":
        $controlador = new VisitaController();
        $controlador->index();
    break;
    case "mostra":
        $controlador = new VisitaController();
        $controlador->mostraVisitas();
    break;
    case "salvar":
        $controlador = new VisitaController();
        $controlador->salvar();
    break;
    default:
        $controlador = new ErroController();
        $controlador->erro404();
    break;
}


#MVC -> Model - View - Controller
#Model -> Modelo de Negocio -> Prover o acesso aos dados
#View -> Visualização -> Exibição da aplicação
#Controller -> Responsável por lidar com as requisições dos usuários e os seus retornos (respostas)

