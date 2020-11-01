<?php

namespace Apolo\src\Model\Colaborador;

class Colaborador
{
    private $nome;
    private $matricula;
    private $email;
    protected $unidade;
    protected $segmento;
    protected $carga;

    public function __construct($nome, $matricula, $email, $unidade, $segmento, $carga)
    {
        $this->nome      = $nome;
        $this->matricula = $matricula;
        $this->email     = $email;
        $this->unidade   = $unidade;
        $this->segmento  = $segmento;
        $this->carga     = $carga;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function getMatricula(): string
    {
        return $this->matricula;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getUnidade(): string
    {
        return $this->unidade;
    }
    public function getSegmento(): string
    {
        return $this->segmento;
    }

    public function setUnidade($unidade): void
    {
        $this->unidade = $unidade;
    }
    public function setSegmento($segmento): void
    {
        $this->segmento = $segmento;
    }
    public function setCarga($carga): void
    {
        $this->carga = $carga;
    }

}