<?php

#DAO -> Data Acess Object -> Objeto de Acesso aos dados

namespace Ifba\Visitas\model\BD;

class VisitanteDao extends \Ifba\Visitas\core\Dao{
    public function inserir($model):bool
    {
        $sql = "INSERT INTO visitantes (nome, data) VALUES (?,?)";
        $sqlPreparado = $this->conexao->prepare($sql);
        $sqlPreparado->bindValue(1,$model->getNome());
        $sqlPreparado->bindValue(2,$model->getData());

        return $sqlPreparado->execute();
    }

    public function buscarTodos():array{
        $sql = "SELECT * FROM visitantes";
        $sqlPreparado = $this->conexao->prepare($sql);
        $sqlPreparado -> execute();

        $dados =  $sqlPreparado->fetchAll(\PDO::FETCH_CLASS,Visitante::class);
        return $dados;
    }
}