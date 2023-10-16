<?php

#DAO -> Data Acess Object -> Objeto de Acesso aos dados

namespace Ifba\Visitas\model;

class VisitanteDao extends \Ifba\Visitas\core\Dao{
    public function inserir($model)
    {
        $sql = "INSERT INTO visitantes (nome, data) VALUES (?,?)";
        $sqlPreparado = $this->conexao->prepare($sql);
        $sqlPreparado->bindValue(1,$model->nome);
        $sqlPreparado->bindValue(2,$model->data);

        $sqlPreparado->execute();
    }
}