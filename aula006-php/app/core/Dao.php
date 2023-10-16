<?php

#Pasta core -> Vai ser a pasta em que irão ficar os arquivos BASE DA APLICAÇÃO
namespace Ifba\Visitas\core;

abstract class Dao{
    # Uma classe abstrata ela deixa de poder ser instaciada e passa a só poder se herdada. Esta classe tambem permite ser tratada como um contrato de implementação em podemos somentae definir as assinaturas dos metodos que as classes que extenderem desta são obrigadas a implementar

    protected \PDO $conexao;
    # PDO -> Classe Nativa de Conexão com o banco de dados -> PHP DATA OBJECT -> Trabalha com a manipulação de BDs.
    
    public function __construct()
    {
        $servidor = "localhost";
        $banco = "visitas_janielcio";
        $usuario = "root";
        $senha = "";

        $string = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($string,$usuario,$senha);
        
    }
    #Este metodo é apenas uma assinatura e todas as calsses que herdarem desta são obrigados a criar um metodo inserir.
    public abstract function inserir ($model);
}