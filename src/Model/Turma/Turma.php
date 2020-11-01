<?php

namespace Apolo\src\Model\Turma;

class Turma
{
    private $instrutor;
    private $treinamento;
    private $dataInicio;
    private $horaInicio;
    private $dataFinal;
    private $horaFinal;
    private $participantes;
    private $carga;


    public function __construct($nome, $treinamento, $dataInicio, $horaInicio, $dataFinal,$        $this->horaFinal        = $horaFinal;
    ,$dataFinal, $participantes)
    {
        $this->instrutor        = $nome;
        $this->treinamento      = $treinamento;
        $this->dataInicio       = $dataInicio;
        $this->horaInicio       = $horaInicio;
        $this->dataFinal        = $dataFinal;
        $this->horaFinal        = $horaFinal;
        $this->participantes    = $participantes;
        $this->carga            = setCarga($dataInicio, $horaInicio, $dataFinal, $horaFinal);
    }

    public function getInstrutor(): string
    {
        return $this->instrutor;
    }
    public function getTreinamento(): string
    {
        return $this->treinamento;
    }
    public function getDataInicio(): string
    {
        return $this->dataInicio;
    }
    public function getHoraInicio(): string
    {
        return $this->horaInicio;
    }
    public function getDataFinal(): string
    {
        return $this->dataFinal;
    }
    public function getDataFinal(): string
    {
        return $this->dataFinal;
    }
    public function getHoraFinal(): string
    {
        return $this->horaFinal;
    }
    public function getParticipantes(): string
    {
        return $this->participantes;
    }
    public function getCarga(): string
    {
        return $this->carga;
    }

    public function setInstrutor($instrutor): void
    {
        $this->instrutor = $instrutor;
    }
    public function setTreinamento($treinamento): void
    {
        $this->treinamento = $treinamento;
    }
    public function setDataInicio($dataInicio): void
    {
        $this->dataInicio = $dataInicio;
    }
    public function setHoraInicio($horaInicio): void
    {
        $this->horaInicio = $horaInicio;
    }
    public function setDataFinal($dataFinal): void
    {
        $this->dataFinal = $dataFinal
    }
    public function setHoraFinal($horaFinal): void
    {
        $this->horaFinal = $horaFinal;
    }
    public function setParticipantes($participantes): void
    {
        $this->participantes = $participantes;
    }
    private function setCarga($dataInicio, $horaInicio, $dataFinal, $horaFinal): void{//a implementar}
}