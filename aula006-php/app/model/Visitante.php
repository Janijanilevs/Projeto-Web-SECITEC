<?php

namespace Ifba\Visitas\model;

class Visitante{
    protected int $id;
    protected string $nome;
    protected string $data;
    protected bool $valido = false;

    public function getId():int
    {
        return $this->id;
    }
    public function getNome():string
    {
        return $this->nome;
    }
    public function getData($formato = "us"):string
    {
        if($formato == "us"){
            return $this->data;
        }else if ($formato == "br") {
            return date("d/m/Y h:i:s",strtotime($this->data));
        }
    }


    public function setNome(string $nome)
    {
        if(mb_strlen($nome)>3){
            $this->nome = $nome;
            $this->valido = true;
        }
    }
    public function setData(string $data="")
    {
        if($data == ""){
            $data = date("Y-m-d H:i:s");
        }
        $this->data = $data;
    }

    public function valida():bool
    {
        return $this->valido;
    }

}
