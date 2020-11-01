<?php

namespace Apolo\src\Model\Treinamento;

class Treinamento
{
    private $nome;
    protected $criador;
    protected $conteudo;
    protected $objetivo;


    public function __construct($nome, $criador, $conteudo, $objetivo)
    {
        $this->nome      = $nome;
        $this->criador   = $criador;
        $this->conteudo  = $conteudo;
        $this->objetivo  = $objetivo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function getCriador(): string
    {
        return $this->matricula;
    }
    public function getConteudo(): string
    {
        return $this->email;
    }
    public function getObjetivo(): string
    {
        return $this->unidade;
    }
    
    public function setCriador($criador): void
    {
        $this->criador = $criador;
    }
    public function setConteudo($conteudo): void
    {
        $this->conteudo = $conteudo;
    }
    public function setObjetivo($objetivo): void
    {
        $this->objetivo = $objetivo;
    }

}