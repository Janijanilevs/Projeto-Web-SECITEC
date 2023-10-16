<?php

require "./vendor/autoload.php";

#https://dontpad.com/php-config
#Crie um arquivo na pasta aula006 chamado .htaccess
#Copie o codigo para este arquivo

$url = $_GET["url"] ?? "/";

switch ($url) {
    case "/":
        $controlador = new \Ifba\Visitas\controller\VisitaController();
        $controlador->index();
    break;
    case "mostra":
        $controlador = new \Ifba\Visitas\controller\VisitaController();
        $controlador->mostraVisitas();
    break;
    case "salvar":
        $controlador = new \Ifba\Visitas\controller\VisitaController();
        $controlador->salvar();
    break;
    default:
        echo "<h2>Página não encontrada</h2>";
    break;
}


#MVC -> Model - View - Controller
#Model -> Modelo de Negocio -> Prover o acesso aos dados
#View -> Visualização -> Exibição da aplicação
#Controller -> Responsável por lidar com as requisições dos usuários e os seus retornos (respostas)

